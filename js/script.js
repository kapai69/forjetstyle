$(document).ready(function() {
    $('.edit-user').on('click', function(){editUser(this);});
    $('#add-user').on('click', function(){addUser();});
});

function getDatepicker(){
    $('.select-datepicker').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: true,
        language: "ru",
        calendarWeeks: true,
        todayHighlight: true,
        defaultViewDate: { year: 1977, month: 04, day: 25 }
    });
}

function addUser(){
    $('#recipient-name').val("");
    $('.select-datepicker').val("");
    $('#avatar-img').html("");
    var action = $('#editUserModal').html();
    action = action.replace(/site\/edit/, 'site/add');
    action = action.replace(/Редактирование/, 'Добавление');
    action = action.replace(/Обновить/, 'Добавить');
    $('#editUserModal').html(action);
    getDatepicker();
}

function editUser(t){
    var userName = $('#' + t.id + 'userName');
    var userBirthday = $('#' + t.id + 'userBirthday');
    var userAvatar = $('#' + t.id + 'userAvatar').html().replace(/img-circle/, '');
    var action = $('#editUserModal').html();
    action = action.replace(/site\/add/, 'site/edit');
    action = action.replace(/Добавление/, 'Редактирование');
    action = action.replace(/Добавить/, 'Обновить');
    $('#editUserModal').html(action);
    $('#recipient-name').val(userName.text());
    $('.select-datepicker').val(userBirthday.text());
    $('#id').val(t.id);
    $('#avatar-img').html(userAvatar);
    getDatepicker();
}