import React, { Component } from "react";

class MyForm extends Component {

    state = {
        form: { username: "", password: "", phoneno: "", isEdit: false },
        btnName: "Save",
        btnClass: "ui primary button submit-button"
    };

    isEmpty(obj) {
        return Object.entries(obj).length === 0 && obj.constructor === Object;
    }
    componentDidUpdate(prevprops) {
        if (prevprops !== this.props && !this.isEmpty(this.props.customer)) {
            this.setState({
                form: { ...this.props.customer, isEdit: true },
                btnName: "Update",
                btnClass: "ui black button submit-button"
            })
            //console.log("update");
        }
    }
    handleChange = event => {
        const {name, value } = event.target;
        let form = this.state.form;
        form[name] = value;
        this.setState({ form });

    };

    onFormSubmit = (event) => {
        //prevent from submit
        event.preventDefault();

        //form validation

        if(this.formValidation()){
            //console.log("ready to create");
            //send form to app
            this.props.onFormSubmit(this.state.form);
        }
        // clear form fields
        this.clearFormFields();
    }

    formValidation = () => {
        if(document.getElementsByName("username")[0].value === ""){
            alert("Enter First Name");
            return false;
        }

        if(document.getElementsByName("password")[0].value === ""){
            alert("Enter Password");
            return false;
        }

        
        if(document.getElementsByName("phoneno")[0].value === ""){
            alert("Enter Phone No:");
            return false;
        }

        return true;
    }
    clearFormFields = () => {
        //change form state
        this.setState({
            form: { username: "", password: "", phoneno: "", isEdit: false }
        })
    
        this.setState({
            btnName: "Save",
            btnClass: "ui primary button submit-button"
        })
        
        //clear form fields

        document.querySelector(".form").reset();
    }
    render() {
        return (
            <form className="ui form" >
                <div className="fields">
                    <div className="four wide field">
                        <label>User Name</label>
                        <input
                            type="text"
                            name="username"
                            placeholder="username"
                            onChange = {this.handleChange}
                            value={this.state.form.username}
                        />
                    </div>

                    <div className="four wide field">
                        <label>Password</label>
                        <input 
                            type="text" 
                            name="password" 
                            placeholder="password" 
                            onChange = {this.handleChange}
                            value={this.state.form.password} 
                        />
                    </div>

                    <div className="four wide field">
                        <label>Phone Number</label>
                        <input 
                            type="phoneno" 
                            name="phoneno" 
                            placeholder="phone no" 
                            onChange = {this.handleChange}
                            value={this.state.form.phoneno} 
                        />
                    </div>

                    <div className="four wide field">
                        <button className={this.state.btnClass} onClick = { this.onFormSubmit}>
                            {this.state.btnName}
                        </button>
                    </div>
                </div>
            </form>
        );
    }
}
export default MyForm;