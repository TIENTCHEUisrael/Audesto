$(document).ready(function() {

    // Gestion du bouton d'ajout d'un nouveau client
    $('#addClient').click(function() {
      $('#modalClientTitle').text('Ajout d\'un client');
      $('#nomModal').val('');
      $('#prenomModal').val('');
      $('#emailModal').val('');
      $('#telephoneModal').val('');
      $('#adresseModal').val('');
      $('#formModalClient').attr('action', 'addClient.php');
      $('#saveClient').text('Ajouter');
      $('#modalClient').modal('show');
    });

    // Gestion des boutons d'actions pour chaque client
    $('.viewClient').click(function() {
      var nom = $(this).parent().siblings(':first-child').text();
      var prenom = $(this).parent().siblings(':nth-child(2)').text();
      var email = $(this).parent().siblings(':nth-child(3)').text();
      var telephone = $(this).parent().siblings(':nth-child(4)').text();
      alert('Nom: ' + nom + '\nPrénom: ' + prenom + '\nEmail: ' + email + '\nTéléphone: ' + telephone);
    });

    $('.editClient').click(function() {
      var id = $(this).closest('tr').data('client-id');
      var nom = $(this).parent().siblings(':first-child').text();
      var prenom = $(this).parent().siblings(':nth-child(2)').text();
      var email = $(this).parent().siblings(':nth-child(3)').text();
      var telephone = $(this).parent().siblings(':nth-child(4)').text();
      var adresse = $(this).closest('tr').data('client-adresse');
      $('#modalClientTitle').text('Modification d\'un client');
      $('#nomModal').val(nom);
      $('#prenomModal').val(prenom);
      $('#emailModal').val(email);
      $('#telephoneModal').val(telephone);
      $('#adresseModal').val(adresse);
      $('#formModalClient').attr('action', 'editClient.php?id=' + id);
      $('#saveClient').text('Modifier');
      $('#modalClient').modal('show');
    });

    $('.deleteClient').click(function() {
      var id = $(this).closest('tr').data('client-id');
      $('#confirmDeleteClient').data('client-id', id);
      $('#modalConfirmation').modal('show');
    });

    // Gestion du bouton de confirmation de suppression d'un client
    $('#confirmDeleteClient').click(function() {
      var id = $(this).data('client-id');
      $('#modalConfirmation').modal('hide');
      $.ajax({
        url: 'deleteClient.php?id=' + id,
        type: 'GET',
        success: function() {
          $('tr[data-client-id="' + id + '"]').remove();
        },
        error: function() {
          alert('Une erreur est survenue lors de la suppression du client.');
        }
      });
    });

    // Gestion du bouton de sauvegarde d'un client ajouté ou modifié
    $('#saveClient').click(function() {
      $('#formModalClient').submit();
    });

  });