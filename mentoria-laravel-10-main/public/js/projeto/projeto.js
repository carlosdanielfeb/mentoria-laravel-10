function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
  if (confirm("Deseja confirmar a exclusão?")){
    $.ajax({
      url: rotaUrl,
      method: "DELETE",
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
      data: {
        id: idDoRegistro,
      },
      beforeSend: function () {
        $.blockUI({
          message: "Carregando...",
          timeout: 2000,
        });
      },
    })
      .done(function (data) {
        $.unblockUI();
        if (data.success == true) {
          window.location.reload();
        } else {
          alert("Não foi possivel excluir");
        }
      })
      .fail(function (data) {
        $.unblockUI();
        alert("nao foi possivel buscar os dados");
      });
  }
}
//mask: valor padrao monetário brasileiro
$("#mascara_valor").mask("#.##0,00", { reverse: true });

//mask:só permite a escrita de texto
$("#mascara_nome").on("input", function () {
  this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, "");
});

//formatação do cep
document.getElementById("cep").addEventListener("blur", async function () {
  let cep = this.value.replace(/\D/g, '');

  if (cep !== "") {
      let validacep = /^[0-9]{8}$/;

      if (validacep.test(cep)) {
          // Limpa os campos antes da requisição
          ["Logradouro", "Bairro", "Cidade", "uf", "ibge"].forEach(id => {
              document.getElementById(id).value = "";
          });

          try {
              let response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
              let dados = await response.json();

              if (!dados.erro) {
                  document.getElementById("Logradouro").value = dados.logradouro.toUpperCase() || "";
                  document.getElementById("Bairro").value = dados.bairro.toUpperCase() || "";
                  document.getElementById("Cidade").value = dados.localidade.toUpperCase() || "";
                  document.getElementById("uf").value = dados.uf.toUpperCase() || "";
                  document.getElementById("ibge").value = dados.ibge || "";
              } else {
                  alert("CEP não encontrado de forma automatizada. Digite manualmente ou tente novamente.");
              }
          } catch (error) {
              console.error("Erro ao buscar o CEP:", error);
              alert("Erro ao buscar o CEP. Verifique sua conexão e tente novamente.");
          }
      } else {
          alert("Formato de CEP inválido.");
      }
  }
});
