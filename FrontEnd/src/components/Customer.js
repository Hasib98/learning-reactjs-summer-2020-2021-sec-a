import React, { Component } from 'react';

class Customer extends Component {

    onDelete = ()=> {
        //console.log("customer23 on delete");
        this.props.onDelete(this.props.customer.userid);
    };

    onEdit = ()=> {
        //console.log("customer on edit");
        this.props.onEdit(this.props.customer);
    };

    render() {

        const {userid, username, password, phoneno} = this.props.customer;
        return(
            <tr>
                <td style={{textAlign: "center"}}>{userid}</td>
                <td>{username}</td>
                <td>{password}</td>
                <td>{phoneno}</td>
                <td>
                    <button className = "mini ui orange button" onClick = {this.onEdit}>Edit</button>
                    <button className = "mini ui purple button" onClick = {this.onDelete}>Delete</button>
                </td>
            </tr>
        );
    }
}

export default Customer;