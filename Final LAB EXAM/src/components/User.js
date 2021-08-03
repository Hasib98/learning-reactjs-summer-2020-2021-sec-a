import './user.css';
import {Link} from "react-router-dom";

const User = ({userid, username, password,phoneno, callback})=>{
    return (
        <div className= 'std'>
            
            <h3>Id: {userid} </h3> 
            <p>Name: {username}</p>
            <p>password: {password}</p>
            <p>phoneno: {phoneno}</p>
            <button onClick={()=>callback(userid)}>Delete</button>
            <Link to={`/edit/${userid}`}> EDIT</Link>
        </div>
    );
}

export default User;