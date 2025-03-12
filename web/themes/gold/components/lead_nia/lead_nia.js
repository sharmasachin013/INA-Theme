  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
    leadNia();
  });
  const leadNia = async () => {
    try {
      const endPoint = "https://varundrupaltheme.lndo.site/lead/ina ";
      const response = await fetch(endPoint);
      if (response.status === 200) {
        const data = await response.json();

        loadleadNia(data);
      } else {
        throw new Error(`Error: ${response.status}`);
      }
    } catch (error) {}
  }

  function loadleadNia(data) {
    let output = '';
    data.forEach(element => {

      
    let text = element.field_link_lead_ina;
    const myArray = text.split(",");
    let strText = myArray[0];
    let strLink = myArray[1];
    
      path = "https://varundrupaltheme.lndo.site" + element.field_image_lead_nia;
      output += `<div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                <div class="class-img rounded-top">
                    <img src="${path}" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="rounded-bottom p-4">
                    <p class="mb-3">${element.title}</p>
                    <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="${strLink}">${strText}</a>
                </div>
            </div>`;
    });
    const loadleadersNia = document.querySelector("#lead-nia");

  loadleadersNia.innerHTML = '';
  loadleadersNia.innerHTML = output;
      $(".class-carousel").trigger('destroy.owl.carousel');
       $(".class-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
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
                items:4
            }
        }
    });
  }