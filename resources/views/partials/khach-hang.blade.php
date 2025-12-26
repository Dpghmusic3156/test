{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-20 overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto text-center text-white">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <span class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Đối tác tin cậy</span>
            </div>

            {{-- Main Counter --}}
            <div class="mb-6">
                <span class="text-8xl md:text-9xl font-extrabold bg-gradient-to-r from-amber-300 via-amber-400 to-orange-400 bg-clip-text text-transparent">
                    200+
                </span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Lab đã sử dụng <span class="bg-gradient-to-r from-amber-300 to-amber-400  bg-clip-text text-transparent">vDentalLab</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto">
                Hơn 200 phòng Lab tại Việt Nam đã tin tưởng và sử dụng vDentalLab để quản lý hoạt động sản xuất kinh doanh của mình
            </p>
        </div>
    </div>
</section>

{{-- Customers Grid Section --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6">
                Khách hàng
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Khách hàng tiêu biểu
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Các Lab hàng đầu tại Việt Nam đang sử dụng vDentalLab mỗi ngày
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">

            @php
            $customers = $customers ?? [
            ['name' => 'M-Medical DentalLab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2024/05/logo_new_smile_lab-removebg-XdclsaZoxPJDTfvxl2Ub.png', 'location' => 'Vĩnh Yên – Vĩnh Phúc', 'address' => 'Vĩnh Yên – Vĩnh Phúc', 'email' => 'labonewsmile88@gmail.com', 'phone' => '0367730751', 'link' => '', 'tier' => 'Basic'],
            ['name' => 'VN Premium Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2024/05/z5276532952194_2d396fbde325544879a50e96744952bd.jpg', 'location' => 'Cần Thơ', 'address' => 'Số 33 đường 19, KDC Cồn Khương, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ', 'email' => 'vovuongngoc95@gmail.com', 'phone' => '0769052024', 'link' => '', 'tier' => 'Basic'],
            ['name' => 'Lab Minh Sơn', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2024/05/Logo-fullcolor-cosmetic-ndoolF4yneoKD9fol2Cn.png', 'location' => 'Hải Phòng', 'address' => 'Số 38-41 lô 27 Lê Hồng Phong, Phường Đông Khê, Quận Ngô Quyền, TP. Hải Phòng', 'email' => 'tranthuytrang2409@gmail.com', 'phone' => '', 'link' => '', 'tier' => 'Standard'],
            ['name' => 'Medical Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2024/05/logo-medical-lab-SgYwbApXgrbxnByVNadu.jpg', 'location' => 'TP. HCM', 'address' => '22/47 Đường Số 22, KP4, Phường Linh Đông, TP. Thủ Đức', 'email' => 'medicaldentallab79@gmail.com', 'phone' => '', 'link' => '', 'tier' => 'Basic'],
            ['name' => 'Detec Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/Logo-detect.png', 'location' => 'Hà Nội', 'address' => 'Tòa nhà ADG, số 37 Lê Văn Thiêm, Quận Thanh Xuân, Hà Nội', 'email' => 'info@detec.vn', 'phone' => '1800 6038', 'link' => 'https://detec.vn/', 'tier' => 'Enterprise'],
            ['name' => 'HT Dental ART', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2021/04/logo-HT-Dental-ART.jpg', 'location' => 'TP. HCM', 'address' => '1/3 đường 33, P. An Khánh, Quận 2, TP. Hồ Chí Minh', 'email' => 'htdentalart@gmail.com', 'phone' => '090 332 77 77', 'link' => 'https://www.facebook.com/profile.php?id=100047347998193', 'tier' => 'Enterprise'],
            ['name' => 'Katri Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-katri.png', 'location' => 'Hà Nội', 'address' => 'LP1-3, Ngõ 219 Trung Kính, P. Yên Hòa, Q. Cầu Giấy, Tp. Hà Nội', 'email' => 'katri8103k@yahoo.com', 'phone' => '04 3513 1616', 'link' => 'http://katri.com.vn/', 'tier' => 'Standard'],
            ['name' => 'Labo Bích', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logolabobich4423-6410.png', 'location' => 'TP. HCM', 'address' => '97D Nguyễn Duy Dương, Phường 9, Quận 5, Thành phố Hồ Chí Minh', 'email' => 'labobich@gmail.com', 'phone' => '0913 698 532', 'link' => 'http://labobich.com/', 'tier' => 'Enterprise'],
            ['name' => 'Labo BLUE', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2024/05/logo-blue-qVK1EaTJroHhPLFqm84c-1.png', 'location' => 'TP. HCM', 'address' => '1162/79 Trường Sa, P 13, Quận Phú Nhuận, TP. Hồ Chí Minh', 'email' => 'bluelaboratory2505@gmail.com', 'phone' => '02839915803', 'link' => '', 'tier' => 'Standard'],
            ['name' => 'Labo Skion', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2023/01/logo.png', 'location' => 'TP. HCM', 'address' => '157/59/2 Dương Bá trạc, P.1, Q.8, TP. HCM', 'email' => 'skionlab@gmail.com', 'phone' => '0388 588 859', 'link' => 'https://skionlab.com/', 'tier' => 'Basic'],
            ['name' => 'Labo Tâm Thư', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/11/labo-labo-tam-thu.png', 'location' => 'TP. HCM', 'address' => '649/15 Hậu Giang, Phường 11, Quận 6, Thành phố Hồ Chí Minh', 'email' => 'tamthudentallab@gmail.com', 'phone' => '033 292 4001', 'link' => 'http://tamthulab.com/', 'tier' => 'Basic'],
            ['name' => 'Lab Văn Lang', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/11/logo-labo-van-lang.jpg', 'location' => 'TP. HCM', 'address' => '2A đường Đội Cung, phường 11, quận 11, TP. Hồ Chí Minh', 'email' => 'vanlangdigitallab@gmail.com', 'phone' => '09 345 76368', 'link' => 'https://warranty.vanlangdigitallab.com/', 'tier' => 'Basic'],
            ['name' => 'Labo Thanh', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/07/logo-thanh.png', 'location' => 'TP. HCM', 'address' => '796 Âu Cơ, P.14, Q.Tân Bình, TP.Hồ Chí Minh', 'email' => 'info@labothanh.com', 'phone' => '0906099990', 'link' => 'https://www.facebook.com/ThanhDentalLab/', 'tier' => 'Basic'],
            ['name' => 'Khai Nguyên', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-khainguyen-min.jpg', 'location' => 'TP. HCM', 'address' => '10/40 Xuân Diệu, phường 4, Quận Tân Bình, Tp. Hồ Chí Minh', 'email' => 'khainguyendentallab@gmail.com', 'phone' => '0906243179', 'link' => 'https://www.facebook.com/khainguyenlab/', 'tier' => 'Basic'],
            ['name' => 'Nha Việt Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-nhavietdental.vn-Nha-Viet-Dental.jpg', 'location' => 'TP. HCM', 'address' => '179-181 Sư Vạn Hạnh, P. 3, Q. 10, Tp. HCM', 'email' => 'nhavietdent@gmail.com', 'phone' => '0918 795 005', 'link' => 'https://nhavietdental.vn/', 'tier' => 'Basic'],
            ['name' => 'Hải Quân Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-haiquan-min.png', 'location' => 'TP. HCM', 'address' => '55 Lê Ngã, P. Phú Trung, Q. Tân Phú, Tp. Hồ Chí Minh', 'email' => 'haiquanzirco@gmail.com', 'phone' => '0938867888', 'link' => 'http://www.haiquanzirconia.com/', 'tier' => 'Standard'],
            ['name' => 'Labo Quốc Yên', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/03/Screen-Shot-2022-03-25-at-09.56.56.png', 'location' => 'TP. HCM', 'address' => '242/3 Ngô Gia Tự, F4, Q.10, TP. Hồ Chí Minh', 'email' => '', 'phone' => '38 345 815', 'link' => 'https://www.facebook.com/pages/Lab-quoc-yen/186538801430183', 'tier' => 'Enterprise'],
            ['name' => 'Labo Việt Mỹ', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/03/Screen-Shot-2022-03-25-at-10.56.36.png', 'location' => 'Hà Nội', 'address' => 'Số 22 Ngách 9 Ngõ 259 Phố Vọng, Q. Hai Bà Trưng, Hà Nội', 'email' => 'vietmylab@gmail.com', 'phone' => '024.3624.8274', 'link' => 'http://labovietmy.com/', 'tier' => 'Enterprise'],
            ['name' => 'Việt Vương', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-vietvuong-min.png', 'location' => 'Hà Nội', 'address' => 'Số 66 Ngõ Lương C, Quốc Tự Giám, Q. Đống Đa, Tp. Hà Nội', 'email' => 'labvietvuong@gmail.com', 'phone' => '0985298688', 'link' => 'https://vietvuongdent.com/', 'tier' => 'Standard'],
            ['name' => 'Labo 3S Dent', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/s-logo-3s.jpg', 'location' => 'TP. HCM', 'address' => '25/1 Lê Duy Nhuận. P.12, Q.Tân Bình, TP.HCM', 'email' => '3szirconiadlt@gmail.com', 'phone' => '028 6272 6644', 'link' => 'http://3sdent.com/', 'tier' => 'Basic'],
            ['name' => 'Labo Hùng Hân', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-Hung-Han.jpg', 'location' => 'Hà Nội', 'address' => 'Số 406 Kim Giang, P. Đại Kim, Q. Hoàng Mai, Hà Nội', 'email' => 'tungdentalab@gmail.com', 'phone' => '024 66890 033', 'link' => 'http://tungdentalab.com/', 'tier' => 'Enterprise'],
            ['name' => 'Việt Quốc Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/labo-Viet-Quoc.jpg', 'location' => 'TP. HCM', 'address' => '27 Đường số 3, P.Hiệp Bình Phước, Quận Thủ Đức, TPHCM', 'email' => 'vietquoclab@yahoo.com.vn', 'phone' => '08.37271 268', 'link' => 'https://www.facebook.com/VietQuocDentalLab/', 'tier' => 'Basic'],
            ['name' => 'Lý Thường Kiệt', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2021/03/logo-lythuongkiet.png', 'location' => 'TP. HCM', 'address' => '47 Hẻm 281 Lý Thường Kiệt, P. 15, Q. 11, Tp.HCM', 'email' => '', 'phone' => '0903 935 908', 'link' => 'https://www.facebook.com/labonhakhoalythuongkiet/', 'tier' => 'Standard'],
            ['name' => 'Mident Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-labo-mident.jpeg', 'location' => 'TP. HCM', 'address' => 'Số 6 Quách Hữu Nghiêm, P. Phú Thạnh, Q. Tân Phú, HCM', 'email' => 'labomidental@gmail.com', 'phone' => '0918144468', 'link' => 'https://labomidental.com/', 'tier' => 'Basic'],
            ['name' => 'Central 5P', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/central.png', 'location' => 'TP. HCM', 'address' => '104/35 đường thành thái P12 Q10, Quận 10, Vietnam', 'email' => 'cskh@central5p.com', 'phone' => '02 862 712 383', 'link' => 'https://www.facebook.com/central5p/', 'tier' => 'Basic'],
            ['name' => 'JADE Dental', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/jade.png', 'location' => 'Long An', 'address' => 'Số 142, Ấp Bình Tiền 2, Xã Đức Hòa Hạ, Huyện Đức Hoà, Tỉnh Long An', 'email' => 'info@jade-dentals.com', 'phone' => '0272 3758 211', 'link' => 'http://jade-dentalsolutions.com/', 'tier' => 'Basic'],
            ['name' => 'OZEAN Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/ozean-2.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'ozeanlab@gmail.com', 'phone' => '0839666968', 'link' => 'https://ozeanlab.com/', 'tier' => 'Basic'],
            ['name' => 'Bamboo Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-bamboo.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'bamboolab68@gmail.com', 'phone' => '0905776368', 'link' => 'http://bamboodentallab.com/', 'tier' => 'Basic'],
            ['name' => 'I-Tech Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-itech-min.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'dentallabo.itech@gmail.com', 'phone' => '0902806818', 'link' => 'https://www.itech-lab.vn/', 'tier' => 'Basic'],
            ['name' => 'Hi-Tech Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-hitech-min.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'xuantrong1209@gmail.com', 'phone' => '0973229129', 'link' => 'http://hitechlab.com.vn/', 'tier' => 'Basic'],
            ['name' => 'Westcoast', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-westcoast-min.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'info@westcoastinternational.com', 'phone' => '', 'link' => 'https://westcoastinternational.com/', 'tier' => 'Basic'],
            ['name' => 'Tây Đô Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-trang-3.jpg', 'location' => 'Cần Thơ', 'address' => '', 'email' => 'taydodent@gmail.com', 'phone' => '', 'link' => 'https://taydodent.business.site/', 'tier' => 'Basic'],
            ['name' => 'Kim Cương Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-kimcuong-scaled.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'chinhhinhrangtd@gmail.com', 'phone' => '', 'link' => 'https://www.facebook.com/pages/Labo-Kim-C%C6%B0%C6%A1ng/497593997049155', 'tier' => 'Basic'],
            ['name' => 'PK Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-labo-pk-1.jpeg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'pkdentallab1989@gmail.com', 'phone' => '', 'link' => 'http://www.ducphatdentallab.com/', 'tier' => 'Basic'],
            ['name' => 'Pro Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-pro.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'prodentallab68@gmail.com', 'phone' => '', 'link' => 'https://www.facebook.com/prodentallabb', 'tier' => 'Basic'],
            ['name' => '5G Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/306963867_191746246556700_383799316544986012_n.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'dentallab5g@gmail.com', 'phone' => '', 'link' => 'https://5gdentallab.net/', 'tier' => 'Basic'],
            ['name' => 'Đàm Gia Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-dam-gia.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'info@damgiagroup.vn', 'phone' => '', 'link' => 'https://www.facebook.com/damgiagroupvn/', 'tier' => 'Basic'],
            ['name' => 'Minh Dental', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo_Minh-dental.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'info@minhdental.com', 'phone' => '', 'link' => 'https://minhdental.com/', 'tier' => 'Basic'],
            ['name' => 'WinWin Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logof.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'dentallabWin-Win@gmail.com', 'phone' => '', 'link' => 'https://www.facebook.com/winwindentallab', 'tier' => 'Basic'],
            ['name' => 'Labo Nguyên Ngọc', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/03/logo-nha-khoa-nguyen-ngoc-1.png', 'location' => 'TP. HCM', 'address' => '', 'email' => '', 'phone' => '', 'link' => 'http://labonguyenngoc.com/', 'tier' => 'Basic'],
            ['name' => 'Thành Tuấn Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-thanhtuan-min.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'thanhtuandentalab@gmail.com', 'phone' => '0826661800', 'link' => 'https://www.facebook.com/profile.php?id=100004521690908', 'tier' => 'Basic'],
            ['name' => 'Lab Phúc An', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/06/logo-phucan.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'phucidl@gmail.com', 'phone' => '0932170969', 'link' => 'https://www.facebook.com/PHUC-AN-Dental-LAB-102422194798032/', 'tier' => 'Basic'],
            ['name' => 'Ngọc Trai Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-ngoctrai-min.jpg', 'location' => 'TP. HCM', 'address' => '', 'email' => 'duonglinhnhi2012@yahoo.com', 'phone' => '0909117066', 'link' => 'http://labpearl.com/', 'tier' => 'Basic'],
            ['name' => 'Labo Z', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/02/logo-laboZ.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'zdentallaboratory@gmail.com', 'phone' => '0901456029', 'link' => 'https://www.facebook.com/Zlabdentallaboratory/', 'tier' => 'Basic'],
            ['name' => 'Thăng Long Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-thanglong.jpg', 'location' => 'Hà Nội', 'address' => '', 'email' => 'thanglongtech.dentallab@gmail.com', 'phone' => '0913558869', 'link' => 'https://www.facebook.com/Th%C4%83ng-Long-Dental-Lab-116138043099461/', 'tier' => 'Basic'],
            ['name' => 'Hữu Nguyên Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-huunguyen-min.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'labohuunguyen@gmail.com', 'phone' => '', 'link' => 'http://www.labohuunguyen.com/', 'tier' => 'Basic'],
            ['name' => 'Next Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2020/04/logo-nexxtlab-min.png', 'location' => 'TP. HCM', 'address' => '', 'email' => 'info@nextlabco.com', 'phone' => '', 'link' => 'https://necdentallab.com/', 'tier' => 'Basic'],
            ['name' => 'Sài Gòn Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-trang-3.jpg', 'location' => 'Hải Phòng', 'address' => '378 Thiên Lôi, Vĩnh Niệm, Lê Chân, Hải Phòng', 'email' => 'labosaigonhp@gmail.com', 'phone' => '02253.718.239', 'link' => '', 'tier' => 'Basic'],
            ['name' => 'Royal Dental Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/royal.jpg', 'location' => 'TP. HCM', 'address' => '244a Cống Quỳnh, phường Phạm Ngũ Lão, quận 1, TP Hồ Chí Minh', 'email' => '', 'phone' => '032 71 41 016', 'link' => 'https://www.facebook.com/HT-Dental-LAB-1511341225800437/', 'tier' => 'Basic'],
            ['name' => 'Vĩnh Thuận Lab', 'logo' => 'https://phanmemlabo.com/wp-content/uploads/2022/10/logo-trang-2.jpg', 'location' => 'TP. HCM', 'address' => '24 đường 17 kdc Bình Hưng, Bình Chánh', 'email' => 'labothuannguyen@yahoo.com', 'phone' => '0903750395', 'link' => '', 'tier' => 'Basic'],
            ];
            @endphp

            @foreach ($customers as $index => $customer)
            {{-- Customer Card with 3D Flip Effect --}}
            <div class="flip-card h-72">
                <div class="flip-card-inner">
                    {{-- Front of Card --}}
                    <div class="flip-card-front bg-white rounded-2xl p-5 border border-gray-200 hover:border-primary-400">
                        <div class="flex flex-col items-center text-center h-full justify-center">
                            <div class="w-24 h-24 rounded-full overflow-hidden mb-4 flex items-center justify-center bg-white">
                                <img src="{{ $customer['logo'] }}" alt="{{ $customer['name'] }}" class="w-full h-full object-contain p-2">
                            </div>
                            <h3 class="text-base font-bold text-gray-800 mb-1">{{ $customer['name'] }}</h3>
                            <p class="text-sm text-gray-600">📍 {{ $customer['location'] }}</p>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full mt-2">
                                {{ $customer['tier'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Back of Card with Contact Details --}}
                    @if ($customer['address'] || $customer['phone'] || $customer['email'] || $customer['link'])
                    <div class="flip-card-back bg-gradient-to-br from-primary-500 to-cyan-600 rounded-2xl p-5">
                        <div class="text-white text-center space-y-3 h-full flex flex-col justify-center">
                            <h4 class="font-bold text-lg mb-2">{{ $customer['name'] }}</h4>
                            @if ($customer['address'])
                            <p class="text-sm flex items-start justify-center gap-2">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>{{ $customer['address'] }}</span>
                            </p>
                            @endif
                            @if ($customer['phone'])
                            <p class="text-sm flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <span>{{ $customer['phone'] }}</span>
                            </p>
                            @endif
                            @if ($customer['email'])
                            <p class="text-sm flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                <span class="truncate">{{ $customer['email'] }}</span>
                            </p>
                            @endif
                            @if ($customer['link'])
                            <a href="{{ $customer['link'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all mt-2">
                                <span>Xem website</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

            {{-- More customers card --}}
            <div class="group bg-gradient-to-br from-primary-50 to-cyan-50 rounded-2xl p-5 border-2 border-primary-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 flex items-center justify-center text-center">
                <div>
                    <div class="text-5xl font-extrabold bg-gradient-to-r from-primary-600 to-cyan-600 bg-clip-text text-transparent mb-2">+150</div>
                    <p class="text-gray-700 font-semibold text-sm">Khách hàng khác</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Trở thành khách hàng tiếp theo của chúng tôi
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Tham gia cùng hơn 200 Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
            </p>
            <a href="https://www.phanmemlabo.com/phan-mem-dental-lab-mien-phi/" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>