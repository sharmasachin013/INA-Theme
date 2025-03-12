  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
    leadersSay();
  });
  const leadersSay = async () => {
    try {
      const endPoint = "https://varundrupaltheme.lndo.site/leaders/say";
      const response = await fetch(endPoint);
      if (response.status === 200) {
        const data = await response.json();

        
       loadleadersSay(data);
      } else {
        throw new Error(`Error: ${response.status}`);
      }
    } catch (error) {}
  }

  function loadleadersSay(data) {
    let output = '';
    data.forEach(element => {
      path = "https://varundrupaltheme.lndo.site" + element.field_img;
      output += `   <div class="testimonial-item border text-center rounded">
                <div class="rounded-circle position-absolute"
                    style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                    <img class="img-fluid rounded-circle" src="${path}" alt="img">
                </div>
                <div class="position-relative" style="margin-top: 140px;">
                    <h5 class="mb-0">${element.title}</h5>
                    <p>${element.field_sub_title}</p>
                </div>
                <div class="testimonial-content p-4">
                    ${element.field_body__}
                </div>
            </div>`;
    });
    const loadleadersSayData = document.querySelector("#leaders-say");

  loadleadersSayData.innerHTML = '';
  loadleadersSayData.innerHTML = output;
      $(".testimonial-carousel").trigger('destroy.owl.carousel');
        $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
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