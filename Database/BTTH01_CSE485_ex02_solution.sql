-- noinspection SqlDialectInspectionForFile

-- noinspection SqlNoDataSourceInspectionForFile

--a, Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet.tieude FROM baiviet INNER JOIN theloai on baiviet.ma_tloai = theloai.ma_tloai WHERE theloai.ten_tloai="Nhạc trữ tình";

--b, Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT * FROM baiviet INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia = "Nhacvietplus";

--c, Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT theloai.ten_tloai FROM theloai LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai WHERE baiviet.ma_bviet IS NULL;

--d, Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet FROM baiviet INNER JOIN tacgia on baiviet.ma_tgia=tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai=theloai.ma_tloai;

--e, Tìm thể loại có số bài viết nhiều nhất 
SELECT theloai.ma_tloai, theloai.ten_tloai, COUNT(*) as SoBV FROM theloai INNER JOIN baiviet ON theloai.ma_tloai=baiviet.ma_tloai GROUP BY theloai.ma_tloai, theloai.ten_tloai HAVING COUNT(*) >= ALL (SELECT COUNT(*) as SoBV FROM theloai INNER JOIN baiviet ON theloai.ma_tloai=baiviet.ma_tloai GROUP BY theloai.ma_tloai, theloai.ten_tloai);

--f, Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(*) AS SoBV FROM baiviet INNER JOIN tacgia ON tacgia.ma_tgia=baiviet.ma_tgia GROUP BY tacgia.ten_tgia ORDER BY SoBV DESC LIMIT 2;

--g, Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet WHERE baiviet.ten_bhat LIKE '%yêu%' OR baiviet.ten_bhat LIKE '%th??ng%' OR baiviet.ten_bhat LIKE '%anh%' OR baiviet.ten_bhat LIKE '%em%';

--h, Liệt kê các bài viết về các bài viet có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet WHERE baiviet.tieude LIKE '%yêu%' OR baiviet.tieude LIKE '%th??ng%' OR baiviet.tieude LIKE '%anh%' OR baiviet.tieude LIKE '%em%';

--i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS SELECT baiviet.*, theloai.ten_tloai, tacgia.ten_tgia FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;