const prPeopleFill = param => {
    $('#people_loader').html('<i class="fas fa-spinner fa-pulse text-info"></i>');
    $('#principal_people').html('').attr('disabled', true);
    setTimeout(() => {

        $('#principal_people').html('').attr('disabled', false);
        $('#people_loader').html('');
    }, 1000);
}

const principalChange = function () {
    $('#principal').on('change', function () {
        const VALS = $(this).val();
        $('#principal_alamat').html(PRADDRESS['pr_' + VALS]);
        prPeopleFill(VALS);
    });
}

const prPeopleChange = function () {

}

$(function () {

    principalChange();

});