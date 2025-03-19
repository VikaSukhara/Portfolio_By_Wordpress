import { registerBlockType, createBlock } from "@wordpress/blocks";
import { RichText, InnerBlocks } from "@wordpress/block-editor";
import { Button } from "@wordpress/components";
import { useDispatch, useSelect } from "@wordpress/data";
import { __ } from "@wordpress/i18n";

// Styles
import "./style.scss";

// Block name
const className = "skill-section";

const TEMPLATE = [
  [
    "core/group",
    {},
    [
      ["core/image", { align: "left" }],
      ["core/heading", { placeholder: __("Skill name", "goit"), level: 5 }],
      ["core/paragraph", { placeholder: __("Skill description", "goit") }],
    ],
  ],
];

const CustomApender = ({ clientId }) => {
  const { insertBlocks } = useDispatch("core/block-editor");
  const parentClientId = useSelect(
    (select) => select("core/block-editor").getBlock(clientId).clientId,
    [clientId]
  );

  const addTemplateBlocks = () => {
    const groupBlock = createBlock(
      "core/group",
      {},
      TEMPLATE[0][2].map(([blockName, blockAttributes]) =>
        createBlock(blockName, blockAttributes)
      )
    );

    insertBlocks([groupBlock], undefined, parentClientId);
  };

  return (
    <Button variant="secondary" onClick={addTemplateBlocks}>
      {" "}
      {__("Add Template Blocks", "goit")}
    </Button>
  );
};

// Register block
registerBlockType(`goit/${className}`, {
  title: __("Skill Section", "goit"),
  category: "goit",
  icon: "welcome-write-blog",
  attributes: {
    heading: {
      type: "string",
      source: "html",
      selector: "h3",
    },
    description: {
      type: "string",
      source: "html",
      selector: "p",
    },
  },

  // Edit function
  edit: ({ clientId, attributes, setAttributes }) => {
    const { heading, description } = attributes;

    return (
      <div className={className}>
        <RichText
          tagName="h3"
          placeholder={__("Your text here...", "goit")}
          value={heading}
          onChange={(value) => setAttributes({ heading: value })}
          className={`${className}_title`}
        />
        <RichText
          tagName="p"
          placeholder={__("I will help you with finding...", "goit")}
          value={description}
          onChange={(value) => setAttributes({ description: value })}
          className={`${className}_description`}
        />

        <div className={`${className}_skills`}>
          <InnerBlocks
            templateLock={false}
            renderAppender={() => <CustomApender clientId={clientId} />}
          />
        </div>
      </div>
    );
  },

  // Save function
  save: ({ attributes }) => {
    const { heading, description } = attributes;

    return (
		
      <div className={`${className}_block`}>
        <RichText.Content
          tagName="h3"
          value={heading}
          className={`${className}_title`}
        />
        <RichText.Content
          tagName="p"
          value={description}
          className={`${className}_description`}
        />
        <div className={`${className}_skills`}>
          <InnerBlocks.Content />
        </div>
      </div>
    );
  },
});
