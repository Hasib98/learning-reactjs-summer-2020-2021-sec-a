import React, { Component } from 'react';
import axios from 'axios';
import MyForm from './MyForm';
import CustomerList from './CustomerList';
import Loader from './Loader';
import "./app.css";
import Sidebar from './Sidebar';
//import Contentview from './Contentview';


class App extends Component{

    state = {
        customers:[],
        customer: {},
        loader: false,
        url: "http://localhost:8000/userlist",
        //url2: "http://localhost:8000/contents"
        //url: "https://jsonplaceholder.typicode.com/posts"
    };



    getCustomers = async () => {
        this.setState({loader: true })
        const customers = await axios.get(this.state.url);
       
        this.setState({ customers: customers.data, loader: false });
    };


    deleteCustomer = async userid => {
        this.setState({loader: true});
        await axios.get(`${this.state.url}/${'delete'}/${userid}`);

        this.getCustomers();
    };

    createCustomer = async data =>{
        this.setState({loader: true});

        await axios.post(`${this.state.url}/${'insert'}`, {
            username: data.username,
            password: data.password,
            phoneno: data.phoneno

        });
        this.getCustomers();
    }

    editCustomer = async data =>{
        this.setState({loader: true});

        await axios.post(`${this.state.url}/${'edit'}/${data.userid}`, {
            username: data.username,
            password: data.password,
            phoneno: data.phoneno

        });
        this.getCustomers();
    }

    componentDidMount() {
        this.getCustomers();
    };

    onDelete = userid => {
        //console.log('app', userid);
        this.deleteCustomer(userid);
    };

    onEdit = data => {
        console.log('app', data);
        //this.deleteCustomer(userid);
        this.setState({customer: data })
    }

    onFormSubmit = (data) => {
        console.log('app', data);

        if(data.isEdit){
            //if is edit true
            this.editCustomer(data);
        }
        else {
            //if is edit false
            this.createCustomer(data);
        }
    }


    render() {
        return(
         
          



            <div>

                <div className = "ui fixed inverter mennu">
                    <div className = "ui container">
                        <a href = "/#" className = "header item">
                           
                        </a>
                    </div>
                </div>

                <div className = "ui main container">
                   <Sidebar/>
                    <MyForm customer = {this.state.customer} onFormSubmit = {this.onFormSubmit}/>
                    {this.state.loader ? <Loader/> : ""}
                    <CustomerList 
                        customers = {this.state.customers} 
                        onDelete = {this.onDelete}
                        onEdit = {this.onEdit}
                    />
                  {/*   <Contentview contents = {this.state.contents} /> */}
                </div>
            </div>
        );
    }
}

export default App;
