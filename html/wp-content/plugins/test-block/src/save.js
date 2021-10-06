/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";

import { Fragment, useEffect, useRef, useState } from "@wordpress/element";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({ attributes }) {
	const { body } = attributes;
	/* 	const { heroImage } = attributes; */
	/* 	const [open, setOpen] = useState(false); */
	//const [detailsOpen, setDetailsOpen] = useState(false);

	/* const handleToggle = () => {
		setOpen(true);
		//setDetailsOpen(!detailsOpen);
	};
 */

	/* function toggleHamburger() {
		navbar.classList.toggle("show-nav");
		open.classList.toggle("hide-open");
		close.classList.toggle("show-close");
	} */

	/* const handleToggle = () => {
		const detailText = document.querySelector(".child");
		detailText.classList.toggle("show-me");
	}; */

	return (
		<div {...useBlockProps.save()}>
			<details>
				<summary>Details</summary>
				<RichText.Content tagName="p" value={body} />
				Something small enough to escape casual notice.
			</details>
			{/* <div class="parent" onClick={handleToggle}>
					<div class="child">hejhejhej</div>
				</div> */}
			{/* 	<div onClick={handleToggle}>{open ? "open" : "close"}</div>
				<div className={`${detailsOpen ? "show" : "hide"}`}>Test text</div> */}

			{/* <img src={heroImage} alt="image" /> */}
		</div>
	);
}
