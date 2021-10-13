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
	const { title, email, phone, other } = attributes;

	return (
		<div {...useBlockProps.save()}>
			{title && <h3>{title}</h3>}

			{phone && (
				<div className="contact-block-phone-wrapper">
					{phone ? (
						<span>
							<a href={"tel:" + phone}>Telefon: </a>
						</span>
					) : (
						""
					)}
					<RichText.Content
						className="contact-block-phone"
						value={phone}
						tagName="a"
						href={"tel:" + phone}
					/>
				</div>
			)}

			{email && (
				<div className="contact-block-email-wrapper">
					{email ? (
						<span>
							<a href={"mailto:" + email}>Mail: </a>
						</span>
					) : (
						""
					)}

					<RichText.Content
						className="contact-block-email"
						value={email}
						tagName="a"
						href={"mailto:" + email}
					/>
				</div>
			)}

			{other && (
				<RichText.Content
					className="contact-block-other"
					value={other}
					tagName="p"
				/>
			)}
		</div>
	);
}
