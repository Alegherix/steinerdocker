import { useState } from 'react';

export default function save(props) {
  const { state, setState } = useState(false);

  return (
    <>
      <button onClick={() => setState(!state)}>TOGGLE ME BITCH</button>
      <p>I AM TOGGLED = {false ? 'SIII PAPI' : 'NOOOO DADDY'}</p>
    </>
  );
}
