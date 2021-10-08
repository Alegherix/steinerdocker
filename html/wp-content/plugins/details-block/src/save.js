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
	const { title, body, bodyColor } = attributes;

	return (
		<div style={{ backgroundColor: bodyColor }} {...useBlockProps.save()}>
			<div class="details-summary summary-border-radius">
				<h3>{title}</h3>
				<svg
					class="icon test"
					width="23"
					height="13"
					viewBox="0 0 23 13"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<line
						x1="11.7719"
						y1="9.98645"
						x2="20.8816"
						y2="1.78405"
						stroke="black"
						stroke-width="3"
						stroke-linecap="round"
					/>
					<line
						x1="2.44459"
						y1="1.78406"
						x2="11.5543"
						y2="9.98646"
						stroke="black"
						stroke-width="3"
						stroke-linecap="round"
					/>
				</svg>
			</div>
			<div class="details details-content-wrapper">
				<RichText.Content class="body-text" tagName="p" value={body} />
			</div>
		</div>
	);
}
