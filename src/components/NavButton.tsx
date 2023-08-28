import './NavButton.css'

type ButtonProps = {
    text: string;
    href?: string;
    active?: boolean;
}


const NavButton = (props: ButtonProps) => {
  if (props.active){
    return (
      <div>
          <button className='nav-btn active-btn'>{props.text}</button>
      </div>
    )
  }

  return (
    <div>
        <button className='nav-btn'>{props.text}</button>
    </div>
  )
}

export default NavButton