  // Append the menu to the navbar container
document.addEventListener("DOMContentLoaded", () => {
     const endPoint =
       "https://varundrupaltheme.lndo.site/system/menu/other-links/linkset";
  const endPoint1 =
    "https://varundrupaltheme.lndo.site/system/menu/other-links/linkset";
  header = '<h4 class="text-white mb-4">Other Links</h4>';
  header1 = '<h4 class="text-white mb-4">External Links</h4>'
  leadFooterLink(endPoint, "#other-link", header);
  leadFooterLink(endPoint1,"#footer-external",header1);
  });
  const leadFooterLink = async (endPoint,selector,header) => {
    try {
     
      const response = await fetch(endPoint);
      if (response.status === 200) {
        const data = await response.json();
        // console.log(data.linkset);
        leadFooterLinkOtherLinks(data.linkset,selector,header);
      } else {
        throw new Error(`Error: ${response.status}`);
      }
    } catch (error) {}
  }

  function leadFooterLinkOtherLinks(data,selector,header) {
    let output = header;
    data[0].item.forEach(element => {
      output +=
        `<a href="${element.href}" class="footer-link">${element.title}</a>`;
    });
    const footerLinkOne = document.querySelector(selector);
    footerLinkOne.innerHTML = output;
    output = '';
  }