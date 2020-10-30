window.addEventListener('load',(ev) => {
    setTimeout(() => {
        // alert("Mensaje");

        $.ajax({
            type: "get",
            url: "notificaciones.php",
            success: function (response) {
                if (response) { 
                    alert("Usted tiene nuevos pedidos o pedidos pendienetes");
                }
            }
        });
    }, 1200);
});

const liveNotifications = () => {
    setInterval(()=> { 
        // fetch('notificaciones.php').
        //     then((response) => {
        //         if (response) {
        //             console.log(response + '\n');
        //             return response;
        //         }
        //     })
        //     // .then(res => { 
        //     //     alert("Usted tiene nuevos pedidos o pedidos pendienetes");
        //     // })
        //     .catch(error => console.error(error));

        $.ajax({
            type: "get",
            url: "notificaciones.php",
            success: function (response) {
                if (response) { 
                    // alert("Usted tiene nuevos pedidos o pedidos pendienetes");
                    const notObj = jQuery.parseJSON(response);
                    console.log(notObj[0]);
                }
            }            
        });
    }, 10000);
    
}

document.addEventListener('DOMContentLoaded', (ev) => {
    liveNotifications();
});