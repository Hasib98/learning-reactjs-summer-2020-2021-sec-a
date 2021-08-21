import React, { Component } from 'react';
import { ProSidebar, Menu, MenuItem, SubMenu } from 'react-pro-sidebar';
import 'react-pro-sidebar/dist/css/styles.css';


class Sidebar extends Component {
    render() {
        return(
            <ProSidebar>
                <Menu>
                    {/* <MenuItem >Dashboard</MenuItem> */}
                    <SubMenu title="Components">
                        <MenuItem><a href="/" className="header item"> Photography</a></MenuItem>
                        <MenuItem><a href="/" className="header item"> Content</a></MenuItem>
                        <MenuItem><a href="/" className="header item"> Timeline</a></MenuItem>
                        <MenuItem>
                       
                        </MenuItem>
                        
                    </SubMenu>
                </Menu>
                
            </ProSidebar>
            
            
           
        );
        
    }
}
export default Sidebar;