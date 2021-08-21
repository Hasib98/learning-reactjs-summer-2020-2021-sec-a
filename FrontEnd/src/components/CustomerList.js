import React, { Component } from 'react';
import Customer from './Customer';
class CustomerList extends Component {
    onDelete = (userid) => {
        //console.log('customer list', userid)
       this.props.onDelete(userid);
    };

    onEdit = (data) => {
       // console.log('customer list', data)
       this.props.onEdit(data);
    };
    render(){
        const customers = this.props.customers;
        return(
            <div className = "data">
                <table className = "ui celled table">
                    <thead>
                        <tr>
                            <th style={{width: "50px", textAlign: "center"}}>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Phnoe No:</th>
                            <th style={{width: "150px"}}>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {
                            customers.map(customer => {
                                return (
                                    <Customer 
                                    customer = {customer} 
                                    key = {customer.userid} 
                                    onDelete = {this.onDelete}
                                    onEdit = {this.onEdit}
                                    />
                                );
                                
                            })      
                        }
                       
                    </tbody>
                </table>
            </div>
        );
    }
}
export default CustomerList;