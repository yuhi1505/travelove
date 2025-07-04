<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

   private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    protected function getUserId()
    {
        if(!session()->has('user_id')) {
           $username = session()->get('username'); // Lấy username từ session
           if ($username) {
               $userid = $this->user->getUserId($username);
               session()->put('user_id', $userid); // Lưu user_id vào session
           }
        }
        return session()->get('user_id'); // Lấy user_id từ session
    }

    public function index()
    {
        $title = 'Thông tin cá nhân';
        $userid = $this->getUserId();
        $user = $this->user->getUser($userid);
        // dd( $userid );
        return view('clients.user-profile', compact('title', 'user'));
    }


    public function update(Request $req)
    {
        $fullName = $req->fullName;
        $address = $req->address;
        $email = $req->email;
        $phone = $req->phone;

        $dataUpdate = [
            'fullName' => $fullName,
            'address' => $address,
            'email' => $email,
            'phoneNumber' => $phone
        ];

        $userid = $this->getUserId();

        $update = $this->user->updateUser($userid, $dataUpdate);
        if (!$update) {
            return response()->json(['error' => true, 'message' => 'Bạn chưa thay đổi thông tin nào, vui lòng kiểm tra lại!']);
        }
        return response()->json(['success' => true, 'message' => 'Cập nhật thông tin thành công!']);
    }

    public function changePassword(Request $req)
    {
        $userid = $this->getUserId();
        $user = $this->user->getUser($userid);

        if (md5($req->oldPass) === $user->password) {
            $update = $this->user->updateUser($userid, ['password' => md5($req->newPass)]);
            if (!$update) {
                return response()->json(['error' => true, 'message' => 'Mật khẩu mới trùng với mật khẩu cũ!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Đổi mật khẩu thành công!']);

            }
        } else {
            return response()->json(['error' => true, 'message' => 'Mật khẩu cũ không chính xác.'], 500);
        }
    }

    public function changeAvatar(Request $req)
    {
        $userid = $this->getUserId();

        $req->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
        ]);

        // Lấy tệp ảnh
        $avatar = $req->file('avatar');

        // Tạo tên mới cho tệp ảnh
        $filename = time() . '.' . $avatar->getClientOriginalExtension(); // Tên tệp mới theo thời gian

        $user = $this->user->getUser($userid);
        if ($user->avatar) {
            // Đường dẫn đến ảnh cũ
            $oldAvatarPath = public_path('clients/assets/images/user-profile/' . $user->avatar);

            // Kiểm tra tệp cũ có tồn tại và xóa nếu có
            if (file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }
        }

        // Di chuyển ảnh vào thư mục public/admin/assets/images/user-profile/
        $avatar->move(public_path('clients/assets/images/user-profile'), $filename);
        $update = $this->user->updateUser($userid, ['avatar' => $filename]);
        $req->session()->put('avatar', $filename);
        if (!$update) {
            return response()->json(['error' => true, 'message' => 'Có vấn đề khi cập nhật ảnh!']);
        }
        return response()->json(['success' => true, 'message' => 'Cập nhật ảnh thành công!']);
    }
}
