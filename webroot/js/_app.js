const React = require("react");
const { useEffect } = React;

require('../css/animate.min.css');
require('../css/bootstrap-datepicker.css');
require('../css/bootstrap.min.css');
require('../css/fontawesome-all.css');

// v1
//require('../public/assets/v1/scss/style.scss');
// rtl
// require('../public/assets/v1/rtl/scss/style.scss');

// v2
require('../scss/style.scss');
// rtl
// require('../public/assets/v2/rtl/scss/style.scss');

// v3
// require('../public/assets/v3/scss/style.scss');
// rtl
// require('../public/assets/v3/rtl/scss/style.scss');

function NeonApp({ Component, pageProps }) {
    useEffect(() => {
        require("../js/jquery-3.3.1.min.js");
        require("../js/jquery.validate.min.js");
        require("../js/bootstrap-datepicker.min.js");

        // v1
        // require("../public/assets/v1/js/main.js");

        // v2
        require("../public/assets/v2/js/main.js");

        // v3
        // require("../public/assets/v3/js/main.js");
    }, []);

    return React.createElement(Component, pageProps);
}

module.exports = NeonApp;
