var happy = {
    SEphone: function (val) {
        return /^\07[0236] *\d{4} *\d{3}$/.test(val);
    },
    
    personummer: function (val) {
        return /^\d+(-\d+)*$/.test(val);
    }, 

    // matches mm/dd/yyyy (requires leading 0's (which may be a bit silly, what do you think?)
    date: function (val) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(val);
    },

    email: function (val) {
        return /^[^@]+@[^@]+\.[^@\.]{2,}$/.test(val);
    },

    minLength: function (val, length) {
        return val.length >= length;
    },

    maxLength: function (val, length) {
        return val.length <= length;
    },

    equal: function (val1, val2) {
        return (val1 == val2);
    }
};