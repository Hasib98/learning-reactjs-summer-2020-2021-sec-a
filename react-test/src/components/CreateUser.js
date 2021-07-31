import { useState } from "react";
import { useParams } from "react-router";
import { useHistory } from "react-router";

const CreateUser = ({status,addnewuser})=>{
    const {id:eid} = useParams();
    const [user, setUser] = useState({name: '', id:'', dept:''});
    const history = useHistory();
        
    const change = (e)=>{
        //console.log(e.target.value);
        const attr = e.target.name;
        const val = e.target.value;


        setUser({...user,[attr]: val})
    };
    
    const onsubmit = (e)=>{
        e.preventDefault();
       // console.log(e.target);
        console.log(user);
        addnewuser(user);
        history.push('/userlist')
        
    }
       

   /*  function onsubmit(e) {
        e.preventDefault();
        alert('You clicked submit.');
    } */
    return(
        <>
            <br/>
            <h3>{status==='add'?'Create':'Edit'} User Page: {eid}</h3>
            <form onSubmit = {onsubmit}>
                Name: <input type='text' name='name' value={user.name} onChange={change}/> <br/>
                ID: <input type='text' name='id'  value={user.id} onChange={change} /><br/>
                Dept: <input type='text' name='dept' value={user.dept} onChange={change} /><br/>
                <input type='submit' value={status==='add'?'Create':'Update'}/>
            </form>
        </>
    );
}

export default CreateUser;