const React = require("react");
const Step1 = require("../../js/step-1");
const Step2 = require("../../js/step-2");
const Step3 = require("../../js/step-3");
const Step4 = require("../../js/step-4");
const Step5 = require("../../js/step-5");

function V2() {
    return (
        <div>
            <div className="wrapper clearfix">
                {/* for rtl */}
                {/* <div className="wrapper clearfix" dir='rtl'> */}

                <div className="wizard-part-title">
                    <h3> Upgrade your Account</h3>
                </div>
                <div className="multisteps-form">
                    <div className="row">
                        <div className="col-12 col-lg-12 ml-auto mr-auto mb-5 mt-5">
                            <div className="multisteps-form__progress">
                                <button className="multisteps-form__progress-btn js-active">Application data</button>
                                <button className="multisteps-form__progress-btn">Tax residency</button>
                                <button className="multisteps-form__progress-btn">Indentity card</button>
                                <button className="multisteps-form__progress-btn">Investability </button>
                                <button className="multisteps-form__progress-btn">Review </button>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-12 col-lg-12 m-auto">
                            <form className="multisteps-form__form clearfix" action="#" method="post" id="wizard">
                                <Step1 />
                                <Step2 />
                                <Step3 />
                                <Step4 />
                                <Step5 />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

module.exports = V2;
