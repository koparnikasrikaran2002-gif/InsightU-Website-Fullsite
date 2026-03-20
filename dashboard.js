const logoutLink = document.getElementById("logoutLink");

// Logout functionality
if (logoutLink) {
  logoutLink.addEventListener("click", function (e) {
    e.preventDefault();
    window.location.href = "logout.php";
  });
}