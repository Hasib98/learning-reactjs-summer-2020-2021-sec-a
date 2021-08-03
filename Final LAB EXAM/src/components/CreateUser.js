import { useParams } from "react-router";
import { useState } from "react";
import { useHistory } from "react-router";

const CreateUser = ({status, addNewUser})=>{
    const {id:eid} = useParams();
    const [user, setUser] = useState({userid:'', username:'',password:'',phoneno:''});
    const history = useHistory();

    const change = (e)=>{
        const attr = e.target.name;
        const val = e.target.value;
        setUser({...user, [attr]: val})
    };

    const onsubmit = (e)=>{
        e.preventDefault();
        console.log(user);
        addNewUser(user);
        history.push('/userlist');
    }

    return(
        <>
            <br/>
            <h3>{status==='add'?'Create':'Edit'} Employee Page: {eid}</h3>
            <form onSubmit={onsubmit}>
                <table>
                    <tr>
                        <td>ID:</td>
                        <td><input type='text' name='id' value={user.userid} onChange={change} /></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td> <input type='text' name='name' value={user.username} onChange={change} /></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type='passsword' name='password' value={user.password} onChange={change} /></td>
                    </tr>
                    <tr>
                        <td>phoneno</td>
                        <td><input type='text' name='phoneno' value={user.phoneno} onChange={change} /><br/></td>
                    </tr>
                </table>
                <br/>
                {/* Dept: <input type='text' name='dept' value={user.dept} onChange={change} /><br/> */}
                <input type='submit' value={status==='add'?'Create':'Update'}/>
            </form>
        </>
    );
}

export default CreateUser;