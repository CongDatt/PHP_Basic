#PHP - OOP
- OOP: Cách thức lập trình tập trung vào đối tượng

- Class: định nghĩa chung cho một tập hợp thực thể nào đó, là khái niệm để chỉ 1 tập hợp có các điểm chung 
    - Trong obj thì sẽ có thuộc tính (attribute) và phương thức (methods) của obj đó
    - Ví dụ: class Student -> chỉ các bạn học sinh, học sinh có tên, tuổi -> attribute, hành động đi học -> methods

- Object: một đối tượng con của class và chứa những đặc tính của class đã được định nghĩa 
    -Bên trong lớp cũng có 2 thành phần chính đó là thuộc tính và phương thức   
    - Ví dụ: học sinh Đạt trong class Student thì Đạt ở đây là 1 Object

- Tính chất của OOP:    
    - Tính trừu tượng (abstraction):
        - là một tiến trình ẩn các chi tiết trình triển khai và chỉ hiển thị tính năng tới người dùng
        - Tính trừa tượng sẽ có: abstract class và interface
        - được hiểu như là 1 bản thiếu kế, trong thực tế thì người cấp trên sẽ viết các abstrac class cho cấp dưới extends
        - Abstrac class: dùng từ khóa abstrac trước class (abstract class ConNguoi{})
            - Tất cả các phương thức của lớp abstract đều phải được khai báo là abstract và phải ở mức protected và public
            - Tất cả các class khi extends Abstrac class đều phải khai báo đầy đủ thuộc tính, phương thức Abstrac
            - Dùng từ khóa extends để kế thừ từ lớp cha
        - Interface: dùng từ khóa interface trước class (interface ConNguoi{})
            - dùng từ khóa implements để sử dụng interface
        - So sánh interface vs abstrac:
            - interface không có thuộc tính còn abstrac thì có thể có
            - interface phải dùng public, còn abstrac thì có thể protected or public
            - methods trong interface là abstract nên không cần từ khóa abstract trong các methods
            - Ở cùng 1 thời điểm thì class có thể implements cũng có thể kế thừa từ class khác
    - Tính kế thừa (inheritance): 1 lớp có thể sử dụng, kế thừa thuộc tính, phương thức của lớp khác, php chỉ có thể kết thừa từ 1 lớp cha
        - Dùng từ khóa extends để sử dụng tính kế thừa
        - Lớp con sẽ có các phương thức và thuộc tính với access modifiers là public or protected
        - Ngoài ta, ta có thể ngăn cản việc kế thừa bằng từ khóa final trước class
    - Tính đóng gói (encapsulation):
        - Tính đóng gói cho phép kiểm soát quyền truy cập giá trị của thuộc tính hoặc quyền gọi phương thức của đối tượng và đối tượng con.
        - Việc đóng gói được thực hiện nhờ sử dụng các từ khóa truy cập (access modifiers:):
            + public: phạm vi truy cập là mọi nơi
            + protected: phạm vi truy cập là đối tượng con, tính dòng họ
            + private: phạm vi truy cập là trong class, mang tính gia đình

    - Tính đa hình (polymorphism): nghĩa là có nhiều hình thái khác nhau.Nó được thể hiện rõ nhất qua việc gọi phương thức của đối tượng
        - nạp chồng phương thức (method overloading)
            + cho phép sử dụng cùng một tên gọi cho các hàm “giống nhau” (có cùng mục đích). Nhưng khác nhau về kiểu dữ liệu tham số hoặc số lượng tham số. 
        - ghi đè phương thức (method overriding): 
            + là hai phương thức cùng tên, cùng tham số, cùng kiểu trả về nhưng thằng con viết lại và dùng theo cách của nó, và xuất hiện ở lớp cha và tiếp tục xuất hiện ở lớp con. 

- Ưu điểm của OOP:
    - Dễ dàng quản lý code khi có sự thay đổi chương trình.
    - Dễ mở rộng
    - Bảo mật cao
    - Tái sử dụng cao

- Static, Static:method , self:method:
    - Static là một thành phần tĩnh mà nó hoạt động như một biến toàn cục, 
dù cho nó có được xử lý ở trong bất kỳ một file nào đi nữa thì nó đều lưu lại giá trị cuối cùng mà nó được thực hiện vào trong lớp
    - Cách dùng: thêm từ khóa static -> visibility static $propertyName;
    - Để gọi phương thức và thuộc tính tĩnh trong class thì chúng ta có thể sử dụng cú pháp selft::ten hoặc ClassName::ten hoặc static::ten
    - Để gọi phương thức tĩnh ở bên ngoài class thì chúng ta gọi theo cú pháp ClassName::tenPhuongThuc(), ClassName::$tenthuoctinh.

- Traits: từ khóa tương tự với từ khóa class nhưng nhầm mục đích đa kế thừa
    - Cách dùng: 
        - tạo Traits với từ khóa Traits
        - trong lớp con dùng từ khóa use + "tên_traits"

- NameSpace: khái niệm giúp tạo ra khoảng viết code giúp:
    - tổ chức code tốt hơn bằng việc nhóm các class để cùng làm 1 task
    - viết nhiều class cùng 1 tên


