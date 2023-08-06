import React from "react";
import Marquee from "../../pages/Items/Marquee";
import Constants from "../../common/Constants";
import Locales from "../../common/Locales";
import { useAppContext } from "../../Context";
import "./css.css";

function ContactUs() {
    const { state } = useAppContext();
    return (
        <div
            style={{
                marginBottom: "70px",
                paddingBottom: "70px",
                textAlign: "center",
            }}
        >
            <Marquee title={Locales[state.lang].Contact} />
            <div className="contact-container">
                <div className="outer-frame">
                    <div className="contact-instagram">
                        <div className="frame2300-frame2309">
                            <span className="contact-text B3Regular">
                                <span>{Locales[state.lang].Instagram}</span>
                            </span>
                            <span className="contact-text H3Medium">
                                <span>
                                    <a href="https://www.instagram.com/kebapcytm/">
                                        {Constants.inst}
                                    </a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div className="contact-instagram">
                        <div className="frame2300-frame2309">
                            <span className="contact-text B3Regular">
                                <span>{Locales[state.lang].Tiktok}</span>
                            </span>
                            <span className="contact-text H3Medium">
                                <span>
                                    <a href="https://www.tiktok.com/kebapçytm/">
                                        {Constants.tik}
                                    </a>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div className="frame2300-frame2301">
                        <div className="frame2300-frame2309">
                            <span className="contact-text B3Regular">
                                <span>{Locales[state.lang].Telephone}</span>
                            </span>
                            <div className="frame2300-frame2313">
                                <span className="contact-text H3Medium">
                                    <span>
                                        <a
                                            href={
                                                "tel:" +
                                                Constants.storePhones[0]
                                            }
                                        >
                                            {Constants.storePhones[0]}
                                        </a>
                                    </span>
                                </span>
                                <span className="contact-text H3Medium">
                                    <span>
                                        {" "}
                                        <a
                                            href={
                                                "tel:" +
                                                Constants.storePhones[1]
                                            }
                                        >
                                            {Constants.storePhones[1]}
                                        </a>
                                    </span>
                                </span>
                                <span className="contact-text H3Medium">
                                    <span>
                                        {" "}
                                        <a
                                            href={
                                                "tel:" +
                                                Constants.storePhones[2]
                                            }
                                        >
                                            {Constants.storePhones[2]}
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div className="frame2300-frame2311">
                        <span className="contact-text B3Regular">
                            <span>{Locales[state.lang].Adress}</span>
                        </span>
                        <span className="contact-text01 H3Medium">
                            <span>{Locales[state.lang].AdressName}</span>
                        </span>
                    </div>
                </div>
            </div>
            <style jsx="true">
                {`
                    .contact-text {
                        color: var(--text-color-2);
                        height: auto;
                        align-self: stretch;
                        text-align: center;
                        line-height: 139.9999976158142%;
                    }
                    .B3Regular {
                        color: var(--ing-color);
                        text-align: center;
                        font-family: Inter;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 140%; /* 19.6px */
                        letter-spacing: -0.28px;
                    }
                    .H3Medium {
                        color: var(--text-color-2);
                        text-align: center;
                        font-family: Inter;
                        font-size: 20px;
                        font-style: normal;
                        font-weight: 500;
                        line-height: 120%; /* 24px */
                        letter-spacing: -0.4px;
                    }
                    .contact-container {
                        width: 100%;
                        height: 420px;
                        display: flex;
                        margin-top: 48px;
                        overflow: auto;
                        align-items: center;
                        flex-direction: column;
                    }
                    .outer-frame {
                        gap: 24px;
                        width: 327px;
                        height: auto;
                        display: flex;
                        align-items: center;
                        flex-shrink: 0;
                        flex-direction: column;
                    }
                    .contact-instagram {
                        gap: 16px;
                        display: flex;
                        align-self: stretch;
                        align-items: center;
                        flex-shrink: 0;
                    }
                    .frame2300-frame2309 {
                        gap: 4px;
                        width: 327px;
                        display: flex;
                        flex-grow: 1;
                        align-items: flex-start;
                        flex-shrink: 0;
                        flex-direction: column;
                        justify-content: center;
                    }

                    .frame2300-frame2301 {
                        gap: 16px;
                        display: flex;
                        align-self: stretch;
                        align-items: flex-start;
                        flex-shrink: 0;
                    }
                    .frame2300-frame2313 {
                        gap: 8px;
                        display: flex;
                        align-self: stretch;
                        align-items: flex-start;
                        flex-direction: column;
                    }
                    .frame2300-frame2311 {
                        gap: 4px;
                        width: 327px;
                        height: 30px;
                        display: flex;
                        align-items: center;
                        flex-shrink: 0;
                        flex-direction: column;
                    }
                    .contact-text01 {
                        color: var(--text-color-2);
                        width: 285px;
                        height: auto;
                        text-align: center;
                        line-height: 120.00000476837158%;
                    }
                `}
            </style>
        </div>
    );
}

export default ContactUs;
