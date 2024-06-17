
$(document).ready(function () {
    console.log("Document prêt");

    $("#button").click(function () {
        console.log("Bouton cliqué");
        alert("Mercedes");

        $.ajax({
            url: "page.php",
            method: "GET",
            success: function (data) {
                $("#content").html(data); {
                console.log("ok");

                },
                error: function(xhr, status, error) {
                    console.error("Erreur de chargement:", error);
                }
        });
    });
});