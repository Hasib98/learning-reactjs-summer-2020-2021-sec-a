import { Link } from "react-router-dom"


const Navbar = ()=>{

    return (
        <div>
            <Link to="/create">Create New User</Link> | 
            <Link to="/userlist">Employee List</Link> |
          {/*   <Link to="/employee">Employee</Link> */}
        </div>
    );
}

export default Navbar;