import img_1 from "../images/group_1.png";

export default function Logo({ width = "255px", height = "289px" }) {
    return <img src={img_1} style={{ width: { width }, height: { height } }} />;
}
