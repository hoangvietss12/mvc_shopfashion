ShopFashion - Project Readme
Giới thiệu
ShopFashion là một project được xây dựng trên mô hình MVC (Model-View-Controller), sử dụng PHP thuần để xây dựng. Project nhằm mục đích tạo ra một trang web bán hàng thời trang trực tuyến với các chức năng cơ bản như hiển thị sản phẩm, đăng nhập, đăng ký, giỏ hàng, phân trang, sắp xếp sản phẩm theo danh mục, lọc sản phẩm và tìm kiếm sản phẩm. Ngoài ra, project còn đi kèm với một trang admin để quản lý các hoạt động của cửa hàng.

Các chức năng chính
1. Hiển thị sản phẩm
Trang web sẽ hiển thị danh sách sản phẩm cho người dùng xem. Mỗi sản phẩm sẽ có thông tin như tên, hình ảnh, giá cả và mô tả. Người dùng có thể xem chi tiết từng sản phẩm để biết thêm thông tin.

2. Đăng nhập và Đăng ký
Người dùng có thể đăng nhập vào hệ thống bằng tài khoản đã đăng ký hoặc có thể tạo một tài khoản mới để đăng nhập. Chức năng này giúp người dùng quản lý thông tin cá nhân và lịch sử mua hàng.

3. Giỏ hàng
Người dùng có thể thêm sản phẩm vào giỏ hàng và quản lý số lượng sản phẩm trong giỏ hàng. Trang web sẽ tính tổng số lượng sản phẩm và tổng giá trị cho người dùng.

4. Phân trang
Nếu danh sách sản phẩm quá dài, trang web sẽ cung cấp chức năng phân trang để người dùng có thể dễ dàng xem các trang sản phẩm tiếp theo.

5. Sắp xếp sản phẩm theo danh mục
Người dùng có thể sắp xếp các sản phẩm theo danh mục mà họ quan tâm. Ví dụ: áo, quần, giày,...

6. Lọc sản phẩm
Người dùng có thể lọc các sản phẩm theo một số tiêu chí như giá, kích cỡ, màu sắc,...

7. Tìm kiếm sản phẩm
Người dùng có thể tìm kiếm các sản phẩm bằng từ khóa. Kết quả tìm kiếm sẽ hiển thị danh sách các sản phẩm phù hợp với từ khóa đó.

8. Trang admin
Trang admin sẽ cung cấp giao diện để quản lý các hoạt động của cửa hàng. Admin có quyền quản lý danh sách sản phẩm, quản lý tài khoản người dùng, xem đơn hàng và thống kê doanh thu.

Hướng dẫn cài đặt
Sao chép project từ kho lưu trữ về máy local của bạn.
Cấu hình môi trường web server trỏ tới thư mục chứa project.
Cấu hình cơ sở dữ liệu MySQL và import file `database.sql` để tạo bảng và dữ liệu cần thiết.
Cấu hình kết nối cơ sở dữ liệu trong file `config/db.php`.
Chạy trang web bằng trình duyệt và sử dụng các chức năng đã mô tả ở trên.
Yêu cầu hệ thống
PHP version 7.0 trở lên
MySQL database