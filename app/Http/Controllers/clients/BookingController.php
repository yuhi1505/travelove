<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Booking;
use App\Models\clients\Checkout;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    private $tour;
    private $booking;
    private $checkout;

    public function __construct()
    {
        $this->user = auth()->user(); // Gọi constructor của Controller để khởi tạo $user
        $this->tour = new Tours();
        $this->booking = new Booking();
        $this->checkout = new Checkout();
    }

    public function index($id)
    {

        $title = 'Đặt Tour';
        $tour = $this->tour->getTourDetail($id);
        $transIdMomo = null; // Initialize the variable
        return view('clients.booking', compact('title', 'tour', 'transIdMomo'));
    }

    public function createBooking(Request $req)
    {
        // dd($req);
        $address = $req->input('address');
        $email = $req->input('email');
        $fullName = $req->input('fullName');
        $numAdults = $req->input('numAdults');
        $numChildren = $req->input('numChildren');
        $paymentMethod = $req->input('payment_hidden');
        $tel = $req->input('tel');
        $totalPrice = $req->input('totalPrice');
        $tourId = $req->input('tourId');
        $userId = $this->getUserId();
        /**
         * Xử lý booking và checkout
         */
        $dataBooking = [
            'tourid' => $tourid,
            'userid' => $userid,
            'address' => $address,
            'fullName' => $fullName,
            'email' => $email,
            'numAdults' => $numAdults,
            'numChildren' => $numChildren,
            'phoneNumber' => $tel,
            'totalPrice' => $totalPrice
        ];

        $bookingid = $this->booking->createBooking($dataBooking);

        $dataCheckout = [
            'bookingid' => $bookingid,
            'paymentMethod' => $paymentMethod,
            'amount' => $totalPrice,
            'paymentStatus' => ($paymentMethod === 'paypal-payment' || $paymentMethod === 'momo-payment') ? 'y' : 'n',
        ];

        if ($paymentMethod === 'paypal-payment') {
            $dataCheckout['transactionid'] = $req->transactionidPaypal;
        } elseif ($paymentMethod === 'momo-payment') {
            $dataCheckout['transactionid'] = $req->transactionidMomo;
        }
        $checkoutid = $this->checkout->createCheckout($dataCheckout);

        if (empty($bookingid) && !$checkoutid) {
            toastr()->error('Có vấn đề khi đặt tour!');
            return redirect()->back(); // Quay lại trang hiện tại nếu có lỗi
        }

        /**
         * Update quantity mới cho tour đó, trừ số lượng
         */
        $tour = $this->tour->getTourDetail($tourid);
        $dataUpdate = [
            'quantity' => $tour->quantity - ($numAdults + $numChildren)
        ];

        $updateQuantity = $this->tour->updateTours($tourid, $dataUpdate);

        /******************************* */

        toastr()->success('Đặt tour thành công!');
        return redirect()->route('tour-booked', [
            'bookingid' => $bookingid,
            'checkoutid' => $checkoutid,
        ]);

    }

    public function createMomoPayment(Request $request)
    {
        session()->put('tourid', $request->tourid);
        
        try {
            // $amount = $request->amount;
            $amount = 10000;
    
            // Các thông tin cần thiết của MoMo
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerCode = "MOMOBKUN20180529"; // mã partner của bạn
            $accessKey = "klm05TvNBzhg7h7j"; // access key của bạn
            $secretKey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa"; // secret key của bạn
    
            $orderInfo = "Thanh toán đơn hàng";
            $requestid = time();
            $orderid = time();
            $extraData = "";
            $redirectUrl = "http://travela:8000/booking"; // URL chuyển hướng
            $ipnUrl = "http://travela:8000/booking"; // URL IPN
            $requestType = 'payWithATM'; // Kiểu yêu cầu
    
            // Tạo rawHash và chữ ký theo cách thủ công
            $rawHash = "accessKey=" . $accessKey . 
                       "&amount=" . $amount . 
                       "&extraData=" . $extraData . 
                       "&ipnUrl=" . $ipnUrl . 
                       "&orderid=" . $orderid . 
                       "&orderInfo=" . $orderInfo . 
                       "&partnerCode=" . $partnerCode . 
                       "&redirectUrl=" . $redirectUrl . 
                       "&requestid=" . $requestid . 
                       "&requestType=" . $requestType;
    
            // Tạo chữ ký
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
    
            // Dữ liệu gửi đến MoMo
            $data = [
                'partnerCode' => $partnerCode,
                'partnerName' => "Test", // Tên đối tác
                'storeid' => "MomoTestStore", // id cửa hàng
                'requestid' => $requestid,
                'amount' => $amount,
                'orderid' => $orderid,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            ];
    
            // Gửi yêu cầu POST đến MoMo để tạo yêu cầu thanh toán
            $response = Http::post($endpoint, $data);
    
            if ($response->successful()) {
                $body = $response->json();
                if (isset($body['payUrl'])) {
                    return response()->json(['payUrl' => $body['payUrl']]);
                } else {
                    // Trả về thông tin lỗi trong response nếu không có 'payUrl'
                    return response()->json(['error' => 'Invalid response from MoMo', 'details' => $body], 400);
                }
            } else {
                // Trả về thông tin lỗi trong response nếu lỗi kết nối
                return response()->json(['error' => 'Lỗi kết nối với MoMo', 'details' => $response->body()], 500);
            }
        } catch (\Exception $e) {
            // Trả về chi tiết ngoại lệ trong response
            return response()->json(['error' => 'Đã xảy ra lỗi', 'message' => $e->getMessage(), 'trace' => $e->getTraceAsString()], 500);
        }
    }
    

    public function handlePaymentMomoCallback(Request $request)
    {
        $resultCode = $request->input('resultCode');
        $transidMomo = $request->query('transid');
        // dd(session()->get('tourid'));
        $tourid = session()->get('tourid'); 
        $tour = $this->tour->getTourDetail($tourid);
        session()->forget('tourid');
        // Handle the payment response
        if ($resultCode == '0') {
            $title = 'Đã thanh toán';
            return view('clients.booking', compact('title', 'tour', 'transidMomo'));
        } else {
            // Payment failed, handle the error accordingly
            $title = 'Thanh toán thất bại';
            return view('clients.booking', compact('title', 'tour'));
        }
    }

    //Kiểm tra người dùng đã đặt và hoàn thành tour hay chưa để đánh giá
    public function checkBooking(Request $req){
        $tourid = $req->tourid;
        $userid = $this->getUserid();
        $check = $this->booking->checkBooking($tourid,$userid);
        if (!$check) {
            return response()->json(['success' => false]);
        }
        return response()->json(['success' => true]);
    }

}