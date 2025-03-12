  let menuData;




  // Function to create a menu
  function createMenu(menuData) {

      const navContainer = document.createElement("div");
      navContainer.classList.add("navbar-nav", "ms-auto", "py-0");
      menuData.forEach(element => {
          if (element.sub_menu) {
              const navContainerSubmenu = document.createElement("div");
              navContainerSubmenu.classList.add("nav-item", "dropdown");
              const link = document.createElement("a")
              link.href = element.url;
              link.textContent = element.title;
              link.classList.add("nav-link", "dropdown-toggle");
              navContainerSubmenu.appendChild(link);
              navContainer.appendChild(navContainerSubmenu);
              const navContainerSubmenuDropDown = document.createElement("div");
              navContainerSubmenuDropDown.classList.add("dropdown-menu", "m-0");
              element.sub_menu.forEach(element => {

                  if (element.sub_menu) {
                      const navContainerSubmenu1 = document.createElement("div");
                      navContainerSubmenu1.classList.add("dropdown-submenu");
                      const link = document.createElement("a")
                      link.href = element.url;
                      link.textContent = element.title;
                      link.classList.add("dropdown-item", "dropdown-toggle");
                      navContainerSubmenu1.appendChild(link);
                      navContainerSubmenuDropDown.appendChild(navContainerSubmenu1);
                      const navContainerSubmenu2 = document.createElement("div");
                      navContainerSubmenu2.classList.add("dropdown-menu");

                      element.sub_menu.forEach(item => {
                          const link = document.createElement("a")
                          link.href = item.url;
                          link.textContent = item.title;
                          link.classList.add("dropdown-item");
                          navContainerSubmenu2.appendChild(link);
                          navContainerSubmenu1.appendChild(navContainerSubmenu2);

                      });



                  } else {
                      const link = document.createElement("a")
                      link.href = element.url;
                      link.textContent = element.title;
                      link.classList.add("dropdown-item");
                      navContainerSubmenuDropDown.appendChild(link);
                      navContainerSubmenu.appendChild(navContainerSubmenuDropDown);

                  }
              });


          } else {
              const link = document.createElement("a")
              link.href = element.url;
              link.textContent = element.title;
              link.classList.add("nav-item", "nav-link");
              navContainer.appendChild(link);

          }

      });

      return navContainer;
  }

  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
      const menuContainer = document.querySelector("#navbarCollapse"); // Replace with your actual container ID

      loadMenu();
      loadSlider();
      //  console.log(menuData);

  });

  const loadMenu = async () => {
      let mainMenu = '';
      try {
          const endPoint = "https://varundrupaltheme.lndo.site/api/ina-menu-api/main";
          const response = await fetch(endPoint);

          if (response.status === 200) {
              const data = await response.json();
              const menuContainer = document.querySelector("#navbarCollapse");
              if (menuContainer) {
                  menuContainer.appendChild(createMenu(data));
              }
              




          } else {
              throw new Error(`Error: ${response.status}`);
          }
      } catch (error) {

      } finally {

      }
  };

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
      } catch (error) {

      }

  }


  function creatSldier(data) {
    //  console.log(data);
      const sliderContainer = document.querySelector("#slider");
    //  console.log(sliderContainer);
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


          //     dataUpdate += `<div class="header-carousel-item">
          //     <img src="${path}" class='img-fluid w-100;
          //         alt="Image">

          // </div>`
      })
    //  console.log(dataUpdate);

     // sliderContainer.appendChild(dataUpdate);
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




  // })(Drupal);