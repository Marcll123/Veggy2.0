M.AutoInit();

const sidenav= document.querySelectorAll('.sidenav')
M.Sidenav.init(sidenav, {
    indicators: true, 
    duration: 1000,
})
//seleccion del id del componente tabs y su activacion
const tab= document.querySelectorAll('.tabs')
M.Tabs.init(tab, {
})