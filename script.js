document
  .getElementById("freteForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var cep = document.getElementById("cep").value;

    fetch("calcula_frete.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "cep=" + encodeURIComponent(cep),
    })
      .then((response) => response.json())
      .then((data) => {
        document.getElementById("resultadoFrete").textContent =
          "Frete: R$ " + data.frete.toFixed(2);
      })
      .catch((error) => {
        console.error("Erro:", error);
      });
  });

const loginBtn = document.querySelector(".login-btn");
const loginForm = document.getElementById("loginForm");

loginBtn.addEventListener("click", function (e) {
  e.preventDefault();
  loginForm.style.display =
    loginForm.style.display === "none" || loginForm.style.display === ""
      ? "block"
      : "none";
});
