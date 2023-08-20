import React from "react";

class StepOne extends React.Component {
    render() {
        return (
            <div className="multisteps-form__panel js-active" data-animation="slideVert">
                <div className="inner pb-100">
                    <div className="wizard-topper">
                        <div className="wizard-progress">
                            <span>1 of 5 Completed</span>
                            <div className="progress">
                                <div className="progress-bar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="wizard-content-item text-center">
                        <h2>Applicant Data</h2>
                        <p>Please take a salfie with your document so that it’s clearly
									visible anddoses not cover your face.</p>
                    </div>
                    <div className="wizard-content-form">
                        <div className="wizard-form-field">
                            <div className="wizard-form-input position-relative form-group has-float-label">
                                <input type="text" name="name" className="form-control" placeholder="First and Last Name" />
                                <label>First and Last Name</label>
                            </div>
                            <div className="wizard-form-input position-relative form-group has-float-label">
                                <input type="email" className="form-control" name="email" placeholder="Email Address" />
                                <label>Email Address</label>
                            </div>
                            <div className="row">
                                <div className="col-md-6">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <input type="text" className="form-control" name="phone" placeholder="Phone" />
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div className="col-md-6">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <input type="text" className="form-control" name="education" placeholder="Education" />
                                        <label>Education</label>
                                    </div>
                                </div>
                            </div>
                            <div className="wizard-form-input position-relative form-group has-float-label">
                                <i data-toggle="tooltip" data-placement="bottom" title="If you want your invoice address to a compnay. Leave blank to use full name" className="fa fa-info"></i>
                                <input type="text" className="form-control" name="name" placeholder="Company Name" />
                                <label>Company Name</label>
                            </div>
                            <div className="wizard-form-input position-relative form-group has-float-label">
                                <input type="text" className="form-control" name="name" placeholder="Address Line 1" />
                                <label>Address Line 1</label>
                            </div>
                            <div className="row">
                                <div className="col-md-4">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <input type="text" className="form-control" name="name" placeholder="City" />
                                        <label>City</label>
                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <input type="text" className="form-control" name="name" placeholder="State/Province/Region" />
                                        <label>State/Province/Region</label>
                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <input type="text" className="form-control" name="name" placeholder="Zip/Postal Code" />
                                        <label>Zip/Postal Code</label>
                                    </div>
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-md-8">
                                    <div className="wizard-form-input position-relative form-group has-float-label">
                                        <i data-toggle="tooltip" data-placement="bottom" title="If you want your invoice address to a compnay. Leave blank to use full name" className="fa fa-info"></i>
                                        <input type="text" className="form-control" name="name" placeholder="Company No." />

                                        <label>Company No.</label>
                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                        <select id="country" name="country" className="form-control">
                                            <option value="">Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="badge-selection">
                            <h3>Show country on your profile and badges</h3>
                            <label>
                                <input type="radio" defaultChecked name="radio" />
                                <span className="checkmark">Yes</span>
                            </label>
                            <label>
                                <input type="radio" name="radio" />
                                <span className="checkmark">No</span>
                            </label>
                        </div>
                    </div>
                    <div className="wizard-footer">
                        <div className="wizard-imgbg">
                            <img src={'../assets/v2/img/v3.png'} alt="" />
                        </div>
                        <div className="actions">
                            <ul>
                                <li><span className="js-btn-next" title="NEXT">NEXT <i className="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default StepOne;
