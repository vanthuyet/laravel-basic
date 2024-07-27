<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class Homecontroller extends Controller
{
    //
    public function index()
    {

        //     DB::table('users')->insert(
        //     [    
        //         [
        //         'name' => 'Ahihi',
        //         'email' => 'a.@gmail.com',
        //         'password' => bcrypt(123345)

        //     ],
        //     [
        //         'name' => 'Bhihi',
        //         'email' => 'b.@gmail.com',
        //         'password' => bcrypt(123345)

        //     ],
        //     [
        //         'name' => 'Chihi',
        //         'email' => 'c.@gmail.com',
        //         'password' => bcrypt(123345),

        //     ]

        //     ]
        // );die;

        // User::insert([
        //     [
        //         'name' => 'Ahihi',
        //         'email' => 'e.@gmail.com',
        //         'password' => bcrypt(123345)

        //     ],
        //     [
        //         'name' => 'Bhihi',
        //         'email' => 'd.@gmail.com',
        //         'password' => bcrypt(123345)

        //     ],
        //     [
        //         'name' => 'Chihi',
        //         'email' => 'h.@gmail.com',
        //         'password' => bcrypt(123345)

        //     ]

        // ])->ddRawSql();die;

        // •	Yêu cầu 1: Truy vấn tất cả các bản ghi - Viết truy vấn để lấy tất cả các bản ghi từ bảng users.
        // $users = User::query()->select()->ddRawSql();

        // •	Yêu cầu 2: Truy vấn với điều kiện - Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25.
        // $data2 = User::query()->where('id','>', 25)->orderByDesc('id')->ddRawSql();


    //    •	    Yêu cầu 3: Truy vấn với nhiều điều kiện - Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25 và status bằng 'active'
        // $users = User::query()->where('age','>=',25)->where('status','=','active')->ddRawSql();

        // •	Yêu cầu 4: Sắp xếp kết quả - Viết truy vấn để lấy các bản ghi từ bảng users, sắp xếp theo age giảm dần
        // $users = User::query()->orderBy('age')->ddRawSql();

        // •	Yêu cầu 5: Giới hạn số lượng kết quả - Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
        // $products = Products::query()->orderBy('product_id')->limit(10)->ddRawSql();

        // •	Yêu cầu 6: Truy vấn với điều kiện OR - Viết truy vấn để lấy các bản ghi từ bảng orders mà status là 'completed' hoặc total lớn hơn 100
        // $orders = Orders::query()->where('status','=','completed')->orWhere('total','>',100)->ddRawSql();

        // Yêu cầu 7: Truy vấn với LIKE - Viết truy vấn để lấy các bản ghi từ bảng customers mà name chứa chuỗi 'John'
        // $users = Customer::query()->where('name','like','%John%')->ddRawSql();

        // •	Yêu cầu 8: Truy vấn với BETWEEN - Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.
        // $users = Sales::query()->whereBetween('amount',[1000, 5000])->ddRawSql();

        // •	Yêu cầu 9: Truy vấn với IN - Viết truy vấn để lấy các bản ghi từ bảng employees mà department_id nằm trong danh sách [1, 2, 3].
        // $users =  Employees::query()->whereIn('department_id' ,[1,2,3])->ddRawSql();

        // •	Yêu cầu 10: Thực hiện JOIN - Viết truy vấn để lấy thông tin từ bảng orders và bảng customers với điều kiện orders.customer_id = customers.id.
        // $users =  Orders::query()->join('customer','order.id','id_customer')->ddRawSql();

        // •	Yêu cầu 11: Truy vấn với nhóm và tổng hợp - Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
        // $users =  Order_item::query()->selectRaw('product_id, SUM(quantity) as total')->groupBy('product_id')->ddRawSql();

        // •	Yêu cầu 12: Cập nhật bản ghi - Viết truy vấn để cập nhật status của tất cả các đơn hàng trong bảng orders thành 'shipped' nếu status hiện tại là 'processing'.
        //  $users = Orders::query()->where('status','=','processing')->update([
        //     'status' => 'shipped'
        //  ])->ddRawSql();

        // Yêu cầu 13: Xóa bản ghi - Viết truy vấn để xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.

        // Yêu cầu 14: Thêm bản ghi mới - Viết truy vấn để thêm một bản ghi mới vào bảng products với các thông tin về tên sản phẩm, giá và số lượng.

        //  Yêu cầu 15: Sử dụng Raw Expressions - Viết truy vấn để lấy các bản ghi từ bảng users mà tháng sinh (birth_date) là tháng 5.
        // $users = User::query()->whereRaw('MONTH(birth_date)  = ?',[5])->ddRawSql();


        // P2 Chuyển đổi câu truy vấn về code PHP.
        // Hiển thị tên nv và tên phòng của phòng ban IT

        // $employees = Employees::query()->from('employees as e')
        // ->select('e.first_name ,e.last_name, d.department_name')
        // ->join('departments as d','e.department_id','d.department_id')
        // ->where('d.department_name','IT');
        
        // dd($employees);
        
        // // Hiển thị tên nhân viên phòng ban Marketing có lương > 70000
        // $employees = Employees::query()->from('employees as e')
        // ->select('e.first_name ,e.last_name, d.department_name')
        // ->join('departments as d','e.department_id','d.department_id')
        // ->where('e.salary','>','70000')
        // ->where('d.department_name','Marketing')->ddRawSql();

        // // Hiển thị tên nhân viên và phòng ban của nv có lương trong khoảng 50000->70000
        // $employees = Employees::query()->from('employees as e')
        // ->select('e.first_name ,e.last_name, d.department_name')
        // ->join('departments as d','e.department_id','d.department_id')
        // ->whereBetween('e.salary',[50000, 70000])->ddRawSql();

        // // Hiển thị tên nv và phòng ban khác phòng HR
        // $employees = Employees::query()->from('employees as e')
        // ->select('e.first_name ,e.last_name, d.department_name')S
        // ->join('departments as d','e.department_id','d.department_id')
        // ->where('d.department_name','<>','HR')->ddRawSql();

        // // Hiển thị tên nhân viên và phòng ban của nv có họ bắt đầu bằng chữ D
        // $employees = Employees::query()->from('employees as e')
        // ->select('e.first_name ,e.last_name, d.department_name')
        // ->join('departments as d','e.department_id','d.department_id')
        // ->where('e.last_name','like','D%')->ddRawSql();

        // 




        return view('admin.index');
    }
}
