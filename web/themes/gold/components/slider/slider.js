document.addEventListener("DOMContentLoaded", () => {
 // const menuContainer = document.querySelector("#slider"); // Replace with your actual container ID
 // loadMenu();
  loadSlider();
  //  console.log(menuData);
});

const loadSlider = async () => {
  try {
    const endPoint = "https://varundrupaltheme.lndo.site/slider";
    const response = await fetch(endPoint);
    if (response.status === 200) {
      const data = await response.json();
      const sliderContainer = document.querySelector("#slider");
      if (sliderContainer) {
        creatSldier(data);
      }
    } else {
      throw new Error(`Error: ${response.status}`);
    }
  } catch (error) {}
}

function creatSldier(data) {
  const sliderContainer = document.querySelector("#slider");
  sliderContainer.innerHTML = '';
  let dataUpdate = '';
  data.forEach((element) => {
    let path = 'https://varundrupaltheme.lndo.site' + element.field_image_1;
    //   console.log(path);
    const sliderCon = document.createElement("div");
    sliderCon.classList.add("header-carousel-item");
    const img = document.createElement("img");
    img.src = path; // Set image source
    img.alt = "Dynamic Image"; // Set alt text
    sliderCon.appendChild(img);
    sliderContainer.appendChild(sliderCon);

  })

  $(".header-carousel").trigger('destroy.owl.carousel');
  $(".header-carousel").owlCarousel({
    animateOut: 'slideOutDown',
    items: 1,
    autoplay: true,
    smartSpeed: 1000,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
    ],
  });
}