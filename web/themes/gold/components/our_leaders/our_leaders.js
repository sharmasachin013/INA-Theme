  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
     // const menuContainer = document.querySelector("#navbarCollapse"); // Replace with your actual container ID

      //loadMenu();
      //loadSlider();
    //  console.log(menuData);
    loadOurLeaders();

    

  });
  const loadOurLeaders = async () => {

      try {
          const endPoint = "https://varundrupaltheme.lndo.site/leaders";
          const response = await fetch(endPoint);

          if (response.status === 200) {
              const data = await response.json();
              //const sliderContainer = document.querySelector("#slider");
              //if (sliderContainer) {

            
            
            createOurLeaders(data);
                
              //}




          } else {
              throw new Error(`Error: ${response.status}`);
          }
      } catch (error) {

      }

  }


function createOurLeaders(data) {
 
  let output = '';


  

  data.forEach(element => {



    let text = element.field_link;
    const myArray = text.split(",");
    let strText = myArray[0];
    let strLink = myArray[1];
    
 
    path = 'https://varundrupaltheme.lndo.site/' + element.field_leaders_image;
  
   output += `<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="event-item rounded">
                    <div class="position-relative">
                        <img src="${path}" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                            style="bottom: 0; left: 0; opacity: 0.8;">
                            <a href="#" class="text-dark">${element.title}</a>
                            <!--<a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>-->
                        </div>
                    </div>
                    <div class="border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">${element.field_body_}</a>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="${strLink}">${strText}</a>
                    </div>
                </div>
            </div>`;
    
  });

  const ourLeaders = document.querySelector("#leaders");

  
  ourLeaders.innerHTML = output;
  

  
    
  }