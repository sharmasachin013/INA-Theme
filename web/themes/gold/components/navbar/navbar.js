//let menuData;
// Function to create a menu
function createMenu(menuData, parentElement) {
  let output = '';
  const subMenuArr = '';
  menuData.forEach((item) => {
    if (item.sub_menu) {
      output += `<div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">${item.title}</a>`;
      output += `<div class="dropdown-menu m-0">`;
      item.sub_menu.forEach((subMenu) => {
        const {
          title,
          url,
          sub_menu
        } = subMenu;
        if (!sub_menu) {
          output += `<a href="${subMenu.url}" class="dropdown-item">${subMenu.title}</a>`;
        } else {
          output += `<div class="dropdown-submenu">`;
          output += `<a href="${url}" class="dropdown-item dropdown-toggle">${title}</a>`;
          output += `<div class="dropdown-menu">`;
          sub_menu.forEach((x) => {
            output += `<a href="${x.url}" class="dropdown-item">${x.title}</a>`;
          })
          output += `</div></div>`;
        }
      })
      output += `</div></div>`;
    } else {
      output += `<a href="${item.url}" class="nav-item nav-link">${item.title}</a>`;
    }
  })
  console.log(subMenuArr);
  parentElement.innerHTML = output;
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
      //   console.log(data);
      if (menuContainer) {
        // menuContainer.appendChild(createMenu(data));
        menuContainer.innerHTML = ""; // Clear existing menu
        createMenu(data, menuContainer);
      }
    } else {
      throw new Error(`Error: ${response.status}`);
    }
  } catch (error) {} finally {}
};




// })(Drupal);