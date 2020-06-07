const navBar = (id, view) => { 
  id.classList.add("selectItem");
  view.classList.remove("d-none");
  
  const arrId = [perfile, setting, comments, dashboard]
  const arrView = [viewPerfile, viewSetting, viewComments, viewDashboard]

  for (e of arrId) {
    if(e.id !== id.id) e.classList.remove("selectItem");
  }
  for (e of arrView) {
    if(e.id !== view.id) e.classList.add("d-none");
  }
}
const estoEsTemporal = () => {
  perfile.addEventListener('click', () => { navBar(perfile, viewPerfile) })
  setting.addEventListener('click', () => { navBar(setting, viewSetting) })
  comments.addEventListener('click', () => { navBar(comments, viewComments) })
  dashboard.addEventListener('click', () => { navBar(dashboard, viewDashboard) })
}

let menuIcon = document.querySelector(".menu-nav-icon")
menuIcon.addEventListener('click', ()=>{mainMenu.classList.toggle("visible")})