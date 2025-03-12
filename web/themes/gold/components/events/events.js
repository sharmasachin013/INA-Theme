  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
    events();
  });
  const events = async () => {
    try {
      const endPoint = "https://varundrupaltheme.lndo.site/events";
      const response = await fetch(endPoint);
      if (response.status === 200) {
        const data = await response.json();
        console.log(data);
        
        loadEvents(data);
      } else {
        throw new Error(`Error: ${response.status}`);
      }
    } catch (error) {}
  }

  function loadEvents(data) {
    let output = '';
    data.forEach(element => {
      path = "https://varundrupaltheme.lndo.site" + element.field_image_;
      output += `       <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-img rounded-top">
                    <img src="${path}" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="bg-light rounded-bottom p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> ${element.field_date_and_time}</a>
                        <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> ${element.comment_count} Comments</a>
                    </div>
                    ${element.field_body}
                </div>
            </div>`;
    });
    const eventsData = document.querySelector(".blog-carousel");

 //   eventsData.innerHTML = '';
  eventsData.innerHTML = output;
      $(".blog-carousel").trigger('destroy.owl.carousel');
      $(".blog-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });
  }