/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	RichText,
	InspectorControls,
	ColorPalette,
	MediaUpload,
} from "@wordpress/block-editor";

import { PanelBody, Button } from "@wordpress/components";

import { Fragment, useEffect, useRef, useState } from "@wordpress/element";

/* const { RichText, InspectorControls, ColorPalette, MediaUpload } =
	wp.blockEditor; */

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { heroImage, body } = attributes;

	function onSelectImage(newImage) {
		setAttributes({ heroImage: newImage.sizes.full.url });
	}

	function onChangeBody(newBody) {
		setAttributes({ body: newBody });
	}

	/* 	const [open, setOpen] = useState(false);
	const [detailsOpen, setDetailsOpen] = useState(false);

	const handleToggle = () => {
		setOpen(!open);
		setDetailsOpen(!detailsOpen);
	}; */

	return (
		<div {...useBlockProps()}>
			<details>
				<summary>Details</summary>
				<RichText
					key="editable"
					tagName="p"
					placeholder="Enter body"
					value={body}
					onChange={onChangeBody}
				/>
			</details>

			{/* <div onClick={handleToggle}>{open ? "open" : "close"}</div>
				<div className={`${detailsOpen ? "show" : "hide"}`}>Test text</div> */}

			{/* 	<PanelBody title={"Hero Image Settings"}>
				<p>
					<strong>Select a Hero Image:</strong>
				</p>

				<MediaUpload
					onSelect={onSelectImage}
					type="image"
					value={heroImage}
					render={({ open }) => (
						<Button
							onClick={open}
							className="components-button block-editor-media-placeholder__button block-editor-media-placeholder__upload-button is-primary"
						>
							Upload Image
						</Button>
					)}
				/>
			</PanelBody>

			<img src={heroImage} alt="image" />*/}
		</div>
	);
}
