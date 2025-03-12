  // Append the menu to the navbar container
  document.addEventListener("DOMContentLoaded", () => {
    history();
  });
  const history = async () => {
    try {
      const endPoint = "https://varundrupaltheme.lndo.site/history";
      const response = await fetch(endPoint);
      if (response.status === 200) {
        const data = await response.json();
        loadhistory(data);
      } else {
        throw new Error(`Error: ${response.status}`);
      }
    } catch (error) {}
  }

  function loadhistory(data) {
    let output = '';
    data.forEach(element => {
      output += element.field_body_history;
    });
    const historyData = document.querySelector("#history");
    historyData.innerHTML = output;
  }