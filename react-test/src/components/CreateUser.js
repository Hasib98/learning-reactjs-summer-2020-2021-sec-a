import { useParams } from "react-router";



const CreateUser = ({status})=>{
    const {id:eid} = useParams();
    return(
        <>
            <br/>
            <h3>{status==='add'?'Create':'Edit'} User Page: {eid}</h3>
            <form onSubmit={} >
                Name: <input type='text' name='name'/> <br/>
                ID: <input type='text' name='id'  /><br/>
                Dept: <input type='text' name='dept' /><br/>
                <input type='submit' value={status==='add'?'Create':'Update'}/>
            </form>
        </>
    );
}



export default CreateUser;