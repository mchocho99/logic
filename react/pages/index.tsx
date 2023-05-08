import { useState } from "react";
import { reto0, reto1 } from "../WeeklyExercises";

const Home = () => {
  const [txtValue, setTxtValue] = useState("");

  const handleText = ({ target : { value } } : { target : { value : string}}) => {
    setTxtValue(value);
  };

  const submitReto1 = () => {
    reto1(txtValue);
  };

  return (
    <>
      <div>
        <input type="button" onClick={reto0} value="Reto 0"/>
      </div>

      <div>
        <input type="text" name="Texto" id="text" onChange={handleText} />
        <input type="button" onClick={submitReto1} value="Reto 1"/>
      </div>
    </>
  )
};

export default Home;