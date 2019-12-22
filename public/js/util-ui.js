$(function () {

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "選択してください");

    /**
     * 情報入力ページのバリデーション条件を設定
     */
    $("#nameForm").validate({
        rules: {
            todohuken: {
                valueNotEquals: "msg"
            },
            fname: {
                required: true,
                maxlength: 50
            },
            lname: {
                required: true,
                maxlength: 50
            },
            viewcnt: {
                required: true,
                number : true
            },

        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },
            fname: {
                required: "必須項目です",
                maxlength: "50文字以下で入力してください"
            },
            lname: {
                required: "必須項目です",
                maxlength: "50文字以下で入力してください"
            },
            viewcnt: {
                required: "必須項目です",
                number: "数字のみを入力してください"
            },

        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});
