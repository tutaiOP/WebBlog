(function($) {
	"use strict"

	// Mobile dropdown
	$('.has-dropdown>a').on('click', function() {
		$(this).parent().toggleClass('active');
	});

	// Aside Nav
	$(document).click(function(event) {
		if (!$(event.target).closest($('#nav-aside')).length) {
			if ( $('#nav-aside').hasClass('active') ) {
				$('#nav-aside').removeClass('active');
				$('#nav').removeClass('shadow-active');
			} else {
				if ($(event.target).closest('.aside-btn').length) {
					$('#nav-aside').addClass('active');
					$('#nav').addClass('shadow-active');
				}
			}
		}
	});

	$('.nav-aside-close').on('click', function () {
		$('#nav-aside').removeClass('active');
		$('#nav').removeClass('shadow-active');
	});


	$('.search-btn').on('click', function() {
		$('#nav-search').toggleClass('active');
	});

	$('.search-close').on('click', function () {
		$('#nav-search').removeClass('active');
	});

	// Parallax Background
	$.stellar({
		responsive: true
	});
})(jQuery);

document.addEventListener("DOMContentLoaded", function() {
    // Lấy giá trị từ phần tử HTML
    var dateElement = document.querySelector('.post-author');
    var dateText = dateElement.textContent.trim();

    // Chuyển đổi định dạng ngày tháng
    var options = { day: 'numeric', month: 'long', year: 'numeric' };
    var date = new Date(dateText);

    // Nếu ngày hợp lệ, định dạng nó
    if (!isNaN(date.getTime())) {
        dateElement.textContent = date.toLocaleDateString('en-GB', options);
    } else {
        console.error('Invalid date format:', dateText);
    }
});
