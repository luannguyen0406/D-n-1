
        $(document).ready(function() {
            // Hàm để tải danh sách tỉnh/thành phố
            function loadProvinces() {
                $.ajax({
                    url: `http://api.geonames.org/administrativeDivisions?geonameId=YOUR_COUNTRY_ID&username=YOUR_USERNAME`,
                    method: 'GET',
                    success: function(data) {
                        var options = '<option value="">Chọn Tỉnh/Thành phố</option>';
                        data.forEach(function(province) {
                            options += '<option value="' + province.id + '">' + province.name + '</option>';
                        });
                        $('#province').html(options);
                    }
                });
            }

            // Hàm để tải danh sách quận/huyện dựa trên tỉnh/thành phố
            function loadDistricts(provinceId) {
                $.ajax({
                    url: 'http://api.geonames.org/children?geonameId=YOUR_PROVINCE_ID&username=YOUR_USERNAME?province_id=' + provinceId, // Đổi URL này thành URL API thực tế
                    method: 'GET',
                    success: function(data) {
                        var options = '<option value="">Chọn Quận/Huyện</option>';
                        data.forEach(function(district) {
                            options += '<option value="' + district.id + '">' + district.name + '</option>';
                        });
                        $('#district').html(options);
                    }
                });
            }

            // Hàm để tải danh sách thị trấn/xã dựa trên quận/huyện
            function loadWards(districtId) {
                $.ajax({
                    url: 'http://api.geonames.org/children?geonameId=YOUR_DISTRICT_ID&username=YOUR_USERNAME?district_id=' + districtId, // Đổi URL này thành URL API thực tế
                    method: 'GET',
                    success: function(data) {
                        var options = '<option value="">Chọn Thị trấn/Xã</option>';
                        data.forEach(function(ward) {
                            options += '<option value="' + ward.id + '">' + ward.name + '</option>';
                        });
                        $('#ward').html(options);
                    }
                });
            }

            // Gọi hàm loadProvinces khi trang được tải
            loadProvinces();

            // Xử lý sự kiện thay đổi của dropdown tỉnh/thành phố
            $('#province').change(function() {
                var provinceId = $(this).val();
                loadDistricts(provinceId);
                $('#ward').html('<option value="">Chọn Thị trấn/Xã</option>');
            });

            // Xử lý sự kiện thay đổi của dropdown quận/huyện
            $('#district').change(function() {
                var districtId = $(this).val();
                loadWards(districtId);
            });
        });