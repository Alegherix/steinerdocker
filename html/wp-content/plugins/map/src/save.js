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
import { useBlockProps } from "@wordpress/block-editor";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save() {
	return (
		<div {...useBlockProps.save()}>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45788.46023762024!2d11.994354128949222!3d57.706882173039766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff40cf930cb29%3A0x656aec9294ab406b!2sRudolf%20Steinerskolan!5e0!3m2!1ssv!2sse!4v1633335830209!5m2!1ssv!2sse"
				width="600"
				height="450"
				style="border:0;"
				allowfullscreen=""
				loading="lazy"
			></iframe>
		</div>
	);
}
