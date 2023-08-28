import NavButton from './NavButton'
import './Navbar.css'


function Navbar(){
    return (
        <div className="outer-nav">
            <div className='nav-component'>
                
            </div>

            <div className='nav-component nav-buttons'>
                <NavButton active text="aardappel"/>
                <NavButton text="tomaat" />
                <NavButton text="kaassoufflet"/>
            </div>
        </div>
    )
}

export default Navbar