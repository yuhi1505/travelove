<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'tbl_booking';

    public function createBooking($data)
    {
        // Chèn dữ liệu và trả về id của bản ghi vừa tạo
        return DB::table($this->table)->insertGetid($data);
    }

    public function cancelBooking($bookingid){
        return DB::table($this->table)
        ->where('bookingid', $bookingid)
        ->update(['bookingStatus' => 'c']);
    }


    public function checkBooking($tourid, $userid)
    {
        return DB::table($this->table)
        ->where('tourid', $tourid)
        ->where('userid', $userid)
        ->where('bookingStatus', 'f')
        ->exists(); // Trả về true nếu bản ghi tồn tại, false nếu không tồn tại
    }
}